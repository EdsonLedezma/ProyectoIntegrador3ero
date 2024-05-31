<?php
session_start();
include "login/conexion.php"; // Make sure to have a valid connection file

// Perform the query to the database
$query = "SELECT * FROM serviciosenglish";
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
      background-color: #00539C; /* Change the background color of the navigation bar to light blue */
    }
     
    /* Change the color of the letters in the navigation bar to white */
    .navbar-inverse .navbar-nav>li>a {
      color: #ffffff;
    }
    
    /* Change the color of the letters of the login button to white */
    .navbar-inverse .navbar-nav>.navbar-right>li>a {
      color: #ffffff;
    }
    
    /* Change the background color of the footer to light blue */
    footer {
      background-color: #00539C;
      padding: 25px;
    }
    
    /* Change the color of the text of the footer to white */
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
        <li class="custom-menu-item"><a href="indexenglish.php">Home</a></li>
        <li class="custom-menu-item"><a href="serviciosenglish.php">Services</a></li>
        <li class="custom-menu-item"><a href="servicios/tipos.html">Quotes</a></li>
        <li class="custom-menu-item"><a href="servicios.php">Switch to Spanish</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/Integradora/login/loginenglish.php"><?php
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
<h3 style="font-size: 2em; font-weight: bold;">Service Data</h3><br>
<div class="container text-center">
  <div class="row">
    <?php
    // Iterate through the results of the query and display the data in service cards
    while ($row = mysqli_fetch_assoc($result)) {
      echo '
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <img src="imagenes/' . $row['foto'] . '" class="card-img-top" alt="Service Image" style="height: 200px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title">' . $row['descripcion'] . '</h5>
              <p class="card-text">Type: ' . $row['tipo'] . '</p>
              <p class="card-text">Sedan Price: ' . $row['preciosedan'] . '</p>
              <p class="card-text">Compact Price: ' . $row['preciocompacto'] . '</p>
              <p class="card-text">Pickup Price: ' . $row['preciopickup'] . '</p>
              <p class="card-text">SUV Price: ' . $row['preciosuv'] . '</p>
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
