<?php
include 'login/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id_usuario = $_GET['id'];

    // Consulta para eliminar el usuario por ID
    $sql = "DELETE FROM usuarios WHERE id = $id_usuario";

    if ($conexion->query($sql) === TRUE) {
        // Redirigir de nuevo a clientes.php después de eliminar
         echo'<meta http-equiv="refresh" content=".2; url=misclientes.php">';
        exit();
    } else {
        echo "Error al eliminar usuario: " . $conexion->error;
    }
} else {
    // Manejar casos donde no se proporciona un ID o el método no es GET
    echo "Acceso no válido.";
}
?>
