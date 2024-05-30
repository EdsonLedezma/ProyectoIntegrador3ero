<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión o Registrarse</title>
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
     
        <p class="button-text">¿Ya eres cliente?</p>
        <a href="clientes.php" class="btn btn-custom">Iniciar Sesión</a>
        <p class="button-text">Soy nuevo cliente</p>
        <a href="nuevos.php" class="btn btn-custom">Registrarse</a>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
