<?php
session_start(); // Iniciar la sesión (si no se ha iniciado todavía)
session_destroy(); // Destruir la sesión actual

// Redireccionar a la página de inicio
header("Location: ../index.php");
exit();
?>