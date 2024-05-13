<?php
require_once('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT u.id, u.correo, u.contraseña, u.status, r.nombre as rol, u.nombre FROM usuarios u left join roles r ON u.rol_id = r.id where correo = '$email' AND contraseña = '$password' AND status = 0";
$result = $conexion->query($query);
$row = $result->fetch_assoc();

if ($result->num_rows > 0) {
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['user'] = $row['correo'];
    $_SESSION['rol'] = $row['rol'];
    $response = [
        "status" =>"success",
        "text" => 'Bienvenido '.$row['nombre']
    ];
    echo json_encode($response);
    exit();
} else {
    $response = [
        "status" => "error",
        "text" => "Credenciales incorrectas. Por favor, inténtelo de nuevo."
    ];
    echo json_encode($response);
    exit();
}
?>