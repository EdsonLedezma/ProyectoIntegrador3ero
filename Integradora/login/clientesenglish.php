<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Link to Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Additional CSS Styles -->
    <style>
        body {
            background-color: #00539C; /* Change the background to blue */
            text-align: center; /* Center the content */
            color: white; /* Text color in white */
        }
        .login-container {
            width: 300px;
            margin: 100px auto; /* Center the form vertically and horizontally */
            background-color: transparent; /* Transparent background for the container */
        }
        .login-container img {
            max-width: 100%;
            margin-bottom: 20px; /* Space between the logo and the buttons */
        }
        .login-container .btn-custom {
            background-color: #ffffff; /* White color for the buttons */
            color: #00539C; /* Blue text color */
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-bottom: 10px; /* Space between the buttons */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="/Integradora/LogoCarWash.png" alt="Company Logo" class="logo">
        <h2>Login</h2>
        <form action="clientes.php" method="post">
            <label for="usuario">Username:</label>
            <input type="text" id="usuario" name="usuario" class="form-control" required><br>
            
            <label for="contrasena">Password:</label>
            <input type="password" id="contrasena" name="contrasena" class="form-control" required><br>
            
            <input type="submit" value="Login" class="btn btn-custom">
        </form>
    </div>

    <!-- Bootstrap Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php
include 'conexion.php';

// Iniciar la sesión para guardar el usuario

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
    $result = mysqli_query($conexion, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Guardar el nombre de usuario en la sesión
        $_SESSION['usuario'] = $row['nombre'];

        // Redirigir dependiendo del tipo de usuario
        if ($row['usuario'] === 'GueroTurbos') {
            echo'<meta http-equiv="refresh" content=".2; url=Integradora/../../indexadmin.php">';

            exit();
        } else {
            header('Location: Integradora/index.php');
            exit();
        }
    } else {
        echo '<p style="color: red;">Usuario o contraseña incorrectos.</p>';
    }
}
?>
