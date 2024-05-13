<?php
session_start();
require_once('config.php');

$id = $_POST['id'];

$query = "DELETE FROM productos WHERE id = '$id'";

$resultado = $conexion->query($query);

if ($resultado === TRUE) {
    $_SESSION['mensaje'] = 'Producto eliminado exitosamente.';
    $_SESSION['clase'] = 'alert-success';
    $_SESSION['icono'] = 'check-circle-fill';
} else {
    $_SESSION['mensaje'] = 'Error al eliminar el producto.';
    $_SESSION['clase'] = 'alert-danger';
    $_SESSION['icono'] = 'exclamation-triangle-fill';
}

?>