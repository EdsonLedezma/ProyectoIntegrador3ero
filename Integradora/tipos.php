<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>.navbar {
      margin-bottom: 0;
      border-radius: 0;
      width: 100%;
      
      background-color:#00539C ; 
    }
     
   
    .navbar-inverse .navbar-nav>li>a {
      color: #ffffff;
    }
   
    .navbar-inverse .navbar-nav>.navbar-right>li>a {
      color: #ffffff;
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
 .card-img-top {
    width: 60%;
    height: 80%; 
    object-fit: cover; 
  }
   body {
      background-color: #6CB4EE; 
    }
  h2 {
    font-family: 'Lato', sans-serif;
    color: white;
    font-weight: bold;
    font-size: 48px;
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
        <img src="/Integradora/LogoCarWash.png" class="img-responsive h-100" style="max-height: 60px;" alt="Image">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="custom-menu-item"><a href="index.php">Home</a></li>
        <li class="custom-menu-item"><a href="servicios/index.html">Servicios</a></li>
        <li class="custom-menu-item"><a href="tipos.php">Cotizaciones</a></li>
      
        <li class="custom-menu-item"><a href="tiposenglish.php ">Cambiar a ingles</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login/login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-5">
    <h2 class="text-center mb-4">
"Selecciona tu tipo de vehiculo."</h2>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card text-center">
                <img src="servicios/march.png" class="card-img-top" alt="Compacto">
                <div class="card-body">
                    <h5 class="card-title">Compacto</h5>
                    <a href="tipos-cotizacion1.php" class="btn btn-primary">Cotizar</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card text-center">
                <img src="servicios/sedan.png" class="card-img-top" alt="Sedán">
                <div class="card-body">
                    <h5 class="card-title">Sedan</h5>
                    <a href="tipos-cotizacion4.php" class="btn btn-primary">Cotizar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card text-center">
                <img src="servicios/silverado.png" class="card-img-top" alt="Pickup">
                <div class="card-body">
                    <h5 class="card-title">Pick Up</h5>
                    <a href="tipos-cotizacion3.php" class="btn btn-primary">Cotizar</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card text-center">
                <img src="servicios/suv.png" class="card-img-top" alt="SUV">
                <div class="card-body">
                    <h5 class="card-title">SUV</h5>
                    <a href="tipos-cotizacion2.php" class="btn btn-primary">Cotizar</a>
                </div>
            </div>
        </div>
    </div>
</div>
  <?php include "footer.php"; ?>

</body>
</html>
