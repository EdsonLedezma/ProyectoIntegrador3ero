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
        <li class="custom-menu-item"><a href="index.php">Home</a></li>
        <li class="custom-menu-item"><a href="servicios.php">Servicios</a></li>
        <li class="custom-menu-item"><a href="tipos.php">Cotizaciones</a></li>
        <li class="custom-menu-item"><a href="indexenglish.php">Cambiar a ingles</a></li>

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

          <?php
          // Recorrer los resultados de la consulta y mostrar los datos en la tabla
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class="container text-center">
  
  
  <!-- Tabla para mostrar los datos -->
  <div class="row">
    <div class="col-sm-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID Servicio</th>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Precio Sedán</th>
            <th>Precio Compacto</th>
            <th>Precio Pickup</th>
            <th>Precio SUV</th>
          </tr>
        </thead>
        <tbody>";
            
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Código HTML posterior ... -->

</body>
</html>
