<?php
session_start();
include "login/conexion.php"; // Asegúrate de tener un archivo de conexión válido

// Realizar la consulta a la base de datos
$query = "SELECT * FROM servicios";
$result = mysqli_query($conexion, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Guero Car Wash</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="Integradora/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
.navbar {
      margin-bottom: 0;
      border-radius: 0;
      width: 100%;
      
      background-color: #00539C; /* Cambia el color de fondo de la barra de navegación a azul claro */
    }
     
    /* Cambia el color de las letras de la barra de navegación a blanco */
    .navbar-inverse .navbar-nav>li>a {
      color: #ffffff;
    }
    
    /* Cambia el color de las letras del botón de login a blanco */
    .navbar-inverse .navbar-nav>.navbar-right>li>a {
      color: #ffffff;
    }
    
    /* Cambia el color de fondo del footer a azul claro */
    footer {
      background-color: #00539C;
      padding: 25px;
    }
    
    /* Cambia el color del texto del footer a blanco */
    footer p {
      color: #ffffff;
    }
    @media (max-width: 600px) {
      .carousel-caption {
        display: none;
         text-shadow: 2px 2px 4px black;
      }
    }
   
.custom-menu-item {
  background-color: #00539C;
  color: #ffffff;
  border-radius: 4px; 
  padding: 5px 15px; 
}


.custom-menu-item:hover {
  background-color: #003366;
}
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  

      </button>
        <img src="LogoCarWash.png" class="img-responsive h-100" style="max-height: 60px;" alt="Image">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="custom-menu-item"><a href="index.php">Inicio</a></li>
        <li class="custom-menu-item"><a href="servicios.php">Servicios</a></li>
        <li class="custom-menu-item"><a href="tiposenglish.php">Cotizaciones</a></li>
        <li class="custom-menu-item"><a href="tipos-cotizacion4en.php">Cambiar a ingles</a></li>

        </label>
    </li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
          
        <li><a href="/login/login.html"><?php

            if (isset($_SESSION['usuario'])) {
                echo  $_SESSION['usuario'];
            } else {
                echo '<span class="glyphicon glyphicon-log-in"></span> Login';
               
            }
            ?></a></li>
      </ul>
    </div>
  </div>
</nav>
<h3 style="font-size: 2em; font-weight: bold;">Datos de servicios</h3><br>
<div class="container text-center">
  <div class="row">
    <?php
    // Recorrer los resultados de la consulta y mostrar los datos en tarjetas de servicio
    while ($row = mysqli_fetch_assoc($result)) {
      echo '
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <img src="imagenes/' . $row['foto'] . '" class="card-img-top" alt="Imagen de servicio" style="height: 200px; object-fit: cover;">
            <div class="card-body d-flex flex-column justify-content-between">
              <div>
                <h5 class="card-title">' . $row['descripcion'] . '</h5>
                <p class="card-title blue-text"> ' . $row['tipo'] . '</p>
                <p class="card-text card-title">Precio Sedan: ' . $row['preciosedan'] . '</p>
              </div>
              <div class="align-self-end">
                <label class="custom-checkbox">
                  <input type="checkbox" class="checkbox-input" name="servicio" value="' . $row['preciosedan'] . '">
                  <span class="checkmark"></span>
                  <span class="btn btn-primary btn-quote">Seleccionar servicio</span>
                </label>
              </div>
            </div>
          </div>
        </div>';
    }
    ?>
  </div>
</div>

<div class="container text-center">
  <div class="row">
    <div class="col-lg-12">
      <h4>Precio Total: <span id="precioTotal">0</span></h4>
    </div>
  </div>
</div>

<script>
  const checkboxes = document.querySelectorAll('.checkbox-input');
  const quoteButtons = document.querySelectorAll('.btn-quote');
  const precioTotal = document.getElementById('precioTotal');

  quoteButtons.forEach(button => {
    button.addEventListener('click', function() {
      const isChecked = !this.classList.contains('active');
      const checkbox = this.parentElement.querySelector('.checkbox-input');
      checkbox.checked = isChecked;

      const precio = parseFloat(checkbox.value);

      if (isChecked) {
        this.classList.add('active');
      } else {
        this.classList.remove('active');
      }

      let total = 0;
      checkboxes.forEach(checkbox => {
        if (checkbox.checked) {
          total += parseFloat(checkbox.value);
        }
      });
      precioTotal.textContent = total.toFixed(2);
    });
  });

  checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {
      const associatedButton = this.parentElement.querySelector('.btn-quote');
      const isChecked = this.checked;

      if (isChecked) {
        associatedButton.classList.add('active');
      } else {
        associatedButton.classList.remove('active');
      }

      let total = 0;
      checkboxes.forEach(checkbox => {
        if (checkbox.checked) {
          total += parseFloat(checkbox.value);
        }
      });
      precioTotal.textContent = total.toFixed(2);
    });
  });
</script>

<?php
include "footer.php"
?>

<!-- Código HTML posterior ... -->

</body>
</html>
