<?php

$roles_permitidos = ['administrador','usuario'];

if(!array_key_exists('rol', $_SESSION) || !in_array($_SESSION['rol'], $roles_permitidos)) {
    // Si el rol del usuario no está permitido, redirigir al index.php
    header("Location: index.php");
    // Mensaje de registro
    error_log("El usuario no tiene el rol adecuado. Redirigiendo al index.php.");
}
?>