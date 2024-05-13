<?php
session_start();
require_once('config.php');

$nombre = $_POST['nombre'];
$precio = number_format($_POST['precio'], 2);
$descripcion = $_POST['descripcion'];
$id = $_POST['id'];

$query = "UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', precio = '$precio' WHERE id = '$id'";

$resultado = $conexion->query($query);

if ($resultado === TRUE) {
    $_SESSION['mensaje'] = 'Producto modificado exitosamente.';
    $_SESSION['clase'] = 'alert-success';
    $_SESSION['icono'] = 'check-circle-fill';
} else {
    $_SESSION['mensaje'] = 'Error al modificar el producto.';
    $_SESSION['clase'] = 'alert-danger';
    $_SESSION['icono'] = 'exclamation-triangle-fill';
}

header("Location: ../../index.php");
?>