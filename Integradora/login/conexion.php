<?php
$servername = "localhost";
$username = "id21342144_edson1234";
$password = "Edson23!";
$dbname = "id21342144_autolavado";
// Create connection
$conexion = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conexion->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


    
