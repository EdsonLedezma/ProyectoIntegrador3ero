<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <!-- Enlace a Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Estilos CSS adicionales -->
    <style>
        body {
            background-color: #00539C; /* Cambia el fondo a azul */
            text-align: center; /* Centra el contenido */
            color: white; /* Color del texto en blanco */
        }
        .login-container {
            width: 300px;
            margin: 100px auto; /* Centra el formulario vertical y horizontalmente */
            background-color: transparent; /* Fondo transparente para el contenedor */
        }
        .login-container img {
            max-width: 100%;
            margin-bottom: 20px; /* Espacio entre el logo y los botones */
        }
        .login-container .btn-custom {
            background-color: #ffffff; /* Color blanco para los botones */
            color: #00539C; /* Color del texto azul */
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-bottom: 10px; /* Espacio entre los botones */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="/Integradora/LogoCarWash.png" alt="Logo de la empresa" class="logo">
        <h2>Iniciar Sesión</h2>
        <form action="clientes.php" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" class="form-control" required><br>
            
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" class="form-control" required><br>
            
            <input type="submit" value="Iniciar Sesión" class="btn btn-custom">
        </form>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php
include 'conexion.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
    $result = mysqli_query($conexion, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['usuario'] = $row['nombre']; // Guardar el nombre de usuario en la sesión
       echo '<meta http-equiv="refresh" content=".2; url=/Integradora/index.php">';
        exit();
    } else {
        echo '<p style="color: red;">Usuario o contraseña incorrectos.</p>';
    }
}
?>

