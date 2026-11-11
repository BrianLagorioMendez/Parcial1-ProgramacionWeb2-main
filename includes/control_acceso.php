<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['usuario_id'])) {
    $_SESSION['flash_mensaje'] = "Acceso denegado. Debe iniciar sesión primero.";
    $_SESSION['flash_tipo'] = "error";
    header("Location: login.php");
    exit();
}