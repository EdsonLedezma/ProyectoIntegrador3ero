<?php
include "login/conexion.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM footer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        $idFooter = $row["idFooter"];
        $logo = $row["logo"];
        $direccion = $row["Direccion"];
        $telefono = $row["WhatsApp"];
        $instagram = $row["Tendencias"];
        $facebook = $row["Privacidad"];
      
      }
} else {
    echo "No se encontraron resultados";
}

$conn->close();
?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-4oV5EgaV0Bt9YmFodjv07zufe9Zph+2z65RtEYNtRZOwK1r+6D5J8ul5K81F1xlC" crossorigin="anonymous">

</head>

<footer class="bg-dark text-light pt-4">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <img src="LogoCarWash.png" alt="" width="120" height="95">
        <p style="color: white;">&copy; Todos los derechos reservados 2023</p>
      </div>
      <div class="col-md-3">
        <h5 style="color: white;"><?php echo $telefono;?></h5>
       <ul class="list-unstyled">
        <li><a href="#" style="color: white;"><i class="fab fa-facebook-f"></i> Facebook</a></li>
        <li><a href="#" style="color: white;"><i class="fab fa-instagram"></i> Instagram</a></li>
        <li><a href="#" style="color: white;"><i class="fab fa-whatsapp"></i> WhatsApp</a></li>
    </ul>
      </div>
      <div class="col-md-3">
        <h5 style="color: white;"><?php echo $instagram;?></h5>
        <ul class="list-unstyled">
          <li><a href="#" style="color: white;">#hueleanuevo</a></li>
          <li><a href="#" style="color: white;">#tuneadofresa</a></li>
          <li><a href="#" style="color: white;">#enceradoalcorte</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5 style="color: white;"><?php echo $direccion;?></h5>
        <ul class="list-unstyled">
          <li><a href="#" style="color: white;">Chihuahua</a></li>
          <li><a href="#" style="color: white;">Ubicacion</a></li>
          <li><a href="#" style="color: white;">Santa Rosa</a></li>
          <li><a href="#" style="color: white;">12a</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

