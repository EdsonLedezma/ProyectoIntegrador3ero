<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mis Clientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .bg-custom {
            background-color: #007bff; /* Cambia el color a azul */
            color: white; /* Cambia el color del texto a blanco */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Lista de Usuarios</h2>
        <table class="table">
            <thead class="bg-custom">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'login/conexion.php';

                // Consulta para obtener los usuarios
                $sql = "SELECT id, nombre, usuario, contrasena FROM usuarios";
                $result = $conexion->query($sql);

                if ($result->num_rows > 0) {
                    // Mostrar cada usuario en la tabla
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['nombre']}</td>
                                <td>{$row['usuario']}</td>
                                <td>{$row['contrasena']}</td>
                                <td><a href='eliminar_usuario.php?id={$row['id']}' class='btn btn-danger btn-sm'>Eliminar</a></td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No hay usuarios</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
