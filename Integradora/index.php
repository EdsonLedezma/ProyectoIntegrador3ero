<?php
        session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Guero Car Wash</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href=Integradora/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
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
    
    .carousel-inner img {
  width: 100%;
  height: auto;
  margin: auto;
  object-fit: cover;
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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
              
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="imagenes/faroscivic.png" alt="Image" ">
        <div class="carousel-caption">
          <h3>Tratamiento ceramico</h3>
          <p>Garantia de 2 años  $400</p>
        </div>      
      </div>

      <div class="item">
        <img src="imagenes/sentrainterior.png" alt="Image" ">
        <div class="carousel-caption">
          <h3>Detallado interior</h3>
          <p>lavado de tapicerias,inhibidor de aromas e hidratador de plasticos</p>
        </div>      
      </div>
      <div class="item">
        <img src="imagenes/sentraexterior.png" alt="Image" ">
        <div class="carousel-caption">
          <h3>Detallado interior</h3>
          <p>lavado de tapicerias,inhibidor de aromas y hidratador de pasticos</p>
        </div>      
      </div>
      <div class="item">
        <img src="imagenes/ceracivic.png" alt="Image" ">
        <div class="carousel-caption">
          <h3>Encerado basico</h3>
          <p>Protege tu pintura contra contaminantes y saca brillo</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3 style="font-size: 2em; font-weight: bold;">Nuestros productos</h3><br>
  <div class="row">
  
    <div class="col-sm-4"> 
      <img src="imagenes/productos.png" class="img-fluid rounded" style="width:100%; height: 248px;" alt="Productos">
      <p style="font-size: 1.2em;">Nuestros productos cumplen con la calidad esperada por el cliente. Utilizamos diversas marcas dependiendo de las preferencias del cliente y su presupuesto.</p>    
    </div>
    
    <div class="col-sm-4">
      <img src="imagenes/vidriocontaminado.jpg" class="img-fluid rounded" style="width:100%; height: auto;" alt="Vidrio contaminado">
      <p style="font-size: 1.2em;">En el día a día, la lluvia ácida, la contaminación férrica y el sol son los principales enemigos del aspecto de tu auto. En Guero's Car Wash te ofreceremos las mejores soluciones para prevenir y corregir estos daños.</p>
    </div>
    
    <div class="col-sm-4"> 
      <img src="imagenes/armorall.png" class="img-fluid rounded" style="width:100%; height: 248px;" alt="Armor All">
      <p style="font-size: 1.2em;">Los acabados de tu vehículo merecen estar siempre en las mejores condiciones. Para garantizar su durabilidad, aplicamos hidratador de plásticos de la más alta calidad.</p>    
    </div>
    
  </div>
</div>
<div class="container text-center">
  <h3 style="font-size: 2em; font-weight: bold; border-bottom: 3px solid black; display: inline-block; padding-bottom: 10px;">Mazda Cx-7 paquete completo básico</h3><br>

  <div class="row">
    <div class="col-lg-6">
      <div style="overflow: hidden;">
        <img src="imagenes/cx7.jpeg" class="img-fluid rounded" style="width:100%; height: 500px; object-fit: contain;" alt="Imagen grande">
      </div>
    </div>
    <div class="col-lg-6">
      <p style="font-size: 2em; border: 3px solid black; padding: 20px; margin-top: 20px;">Este cliente nos pidió un servicio de restauración de faros, encerado y lavado de interiores. Aplicamos su respectivo Armor-All al vehículo y le dejamos un aroma a limpio muy agradable. La cera aplicada en este vehículo dura aproximadamente 4 meses. &#x1F9FC; 🧽😎</p>
    </div>
  </div>
</div>


  
<footer class="container-fluid text-center">
    
 <?php
 include "footer.php";
 ?>

</body>
</html>
