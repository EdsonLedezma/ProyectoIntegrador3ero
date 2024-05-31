<?php
session_start();
include "login/conexion.php"; 


$query = "SELECT * FROM servicios";
$result = mysqli_query($conexion, $query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Lava Car Wash</title>
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
      background-color: #00539C; 
    }
     
   
   .navbar-inverse.navbar-nav>li>a {
      color: #ffffff;
    }
    
    
   .navbar-inverse.navbar-nav>.navbar-right>li>a {
      color: #ffffff;
    }
    
   
    footer {
      background-color: #00539C;
      padding: 25px;
    }
    
   
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
      <img src="LogoCarWash.png" class="img-responsive h-100" style="max-height: 60px;" alt="Imagen">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="custom-menu-item"><a href="index.php">Inicio</a></li>
        <li class="custom-menu-item"><a href="servicios.php">Servicios</a></li>
        <li class="custom-menu-item"><a href="tipos.php">Cotizaciones</a></li>
        <li class="custom-menu-item"><a href="serviciosenglish.php">Cambiar a inglés</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/Integradora/login/login.php"><?php
            if (isset($_SESSION['usuario'])) {
                echo  $_SESSION['usuario'];
            } else {
                echo '<span class="glyphicon glyphicon-log-in"></span> Iniciar sesión';
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
    // Itera a través de los resultados de la consulta y muestra los datos en tarjetas de servicios
    while ($row = mysqli_fetch_assoc($result)) {
      echo '
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <img src="imagenes/'. $row['foto']. '" class="card-img-top" alt="Imagen de servicio" style="height: 200px; object-fit: cover;">
            <div class="card-body">
              <h5 class"card-title">'. $row['descripcion']. '</h5>
              <p class="card-text">Tipo: '. $row['tipo']. '</p>
              <p class="card-text">Precio Sedán: '. $row['preciosedan']. '</p>
              <p class="card-text">Precio Compacto: '. $row['preciocompacto']. '</p>
              <p class="card-text">Precio Pickup: '. $row['preciopickup']. '</p>
              <p class="card-text">Precio SUV: '. $row['preciosuv']. '</p>
            </div>
          </div>
        </div>';
    }
    ?>
  </div>
</div>

<?php
include "footer.php"
?>



</body>
</html>