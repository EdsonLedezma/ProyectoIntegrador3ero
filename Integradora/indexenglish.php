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
        <li class="custom-menu-item"><a href="indexenglish.php">Home</a></li>
        <li class="custom-menu-item"><a href="serviciosenglish.php">Services</a></li>
        <li class="custom-menu-item"><a href="servicios/tipos.html">Quotes</a></li>
     
        <li class="custom-menu-item"><a href="index.php">Language Spanish</a></li>
        
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
        <img src="imagenes/sentrainterior.png" alt="Image" ">
        <div class="carousel-caption">
          <h3>Lavado de Tapiceria$</h3>
          <p>Incluye aromatizante $700</p>
        </div>      
      </div>

      <div class="item">
        <img src="imagenes/sentraexterior.png" alt="Image" ">
        <div class="carousel-caption">
          <h3>Pulido y encerado</h3>
          <p>Proteccion ceramica por 6 meses $600</p>
        </div>      
      </div>
      <div class="item">
        <img src="imagenes/faroscivic.png" alt="Image" ">
        <div class="carousel-caption">
          <h3>Restauracion de faros</h3>
          <p>Garantia de 2 años $500</p>
        </div>      
      </div>
      <div class="item">
        <img src="imagenes/ceracivic.png" alt="Image" ">
        <div class="carousel-caption">
          <h3>encerado basico $300</h3>
          <p>No se corrige el daño, es para prevenirlo!</p>
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
  <h3>Our products</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="cx7.jpeg" class="img-responsive" style="width:100%" alt="Image">
      <p>Cuidado de tu auto</p>
    </div>
    <div class="col-sm-4"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p></p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>"Our products meet the quality expected by the customer; we use various brands depending on the customer's preferences and budget."





</p>
      </div>
      <div class="well">
       <p>"Day to day, acid rain, iron contamination, and the sun are the three main enemies of your car's appearance. At Guero's Car Wash, we offer the best solutions to prevent and correct these damages."</p>
      </div>
    </div>
  </div>
</div><br>

<?php
 include "footer.php";
 ?>

</body>
</html>