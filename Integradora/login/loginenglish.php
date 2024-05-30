<!DOCTYPE html>
<html>
<head>
    <title>Login or Register</title>
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
     
        <p class="button-text">Already a customer?</p>
        <a href="clientesenglish.php" class="btn btn-custom">Login</a>
        <p class="button-text">New customer?</p>
        <a href="nuevos.php" class="btn btn-custom">Register</a>
    </div>

    <!-- Bootstrap Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
