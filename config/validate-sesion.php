<?php
session_start();

if(!isset($_SESSION['loggedin'])) {
    // Si el usuario no ha iniciado sesión, redirigir al index.php
    header("Location: index.php");
    // Mensaje de registro
    error_log("El usuario no ha iniciado sesión. Redirigiendo al index.php.");
}
?>