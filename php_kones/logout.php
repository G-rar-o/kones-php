<?php
session_start();

// Destruir la sesión
session_destroy();

// Limpiar todas las variables de sesión
$_SESSION = array();

// Redirigir al login
header('Location: login.php');
exit();
?>
