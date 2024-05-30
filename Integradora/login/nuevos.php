<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>New User Register</title>
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
        <h2>New User Register</h2>
        <form action="nuevos.php" method="post">
            <label for="nombre_completo">Full Name:</label>
            <input type="text" id="nombre_completo" name="nombre_completo" class="form-control" required><br>
            
            <label for="nuevo_usuario">New User:</label>
            <input type="text" id="nuevo_usuario" name="nuevo_usuario" class="form-control" required><br>
            
            <label for="contrasena">Password</label>:</label>
            <input type="password" id="contrasena" name="contrasena" class="form-control" required><br>
            
            <label for="confirmar_contrasena">Confirm Password:</label>
            <input type="password" id="confirmar_contrasena" name="confirmar_contrasena" class="form-control" required><br>
            
            <input type="submit" value="Registrarse" class="btn btn-custom">
        </form>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include 'conexion.php';

 // Iniciar la sesión


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreCompleto = $_POST['nombre_completo'];
    $nuevoUsuario = $_POST['nuevo_usuario'];
    $contrasena = $_POST['contrasena'];
    $confirmarContrasena = $_POST['confirmar_contrasena'];

    if ($contrasena !== $confirmarContrasena) {
        echo '<p style="color: red;">Las contraseñas no coinciden.</p>';
    } else {
        // Verificar si el usuario ya existe
        $sql = "SELECT * FROM usuarios WHERE usuario = '$nuevoUsuario'";
        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) > 1) {
            echo '<p style="color: red;">El nombre de usuario ya está en uso.</p>';
        } else {
            $sqlInsert = "INSERT INTO usuarios (nombre, usuario, contrasena) VALUES ('$nombreCompleto', '$nuevoUsuario', '$contrasena')";
            if (mysqli_query($conexion, $sqlInsert)) {
                $_SESSION['usuario'] = $nuevoUsuario;
                echo '<meta http-equiv="refresh" content=".2; url=/Integradora/index.php">';
                exit();
            } else {
                echo '<p style="color: red;">Error al registrar el usuario.</p>';
            }
        }
    }
}

?>

