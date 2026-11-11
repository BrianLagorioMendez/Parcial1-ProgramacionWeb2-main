<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['cambiar_tema'])) {
    $nuevo_tema = ($_GET['cambiar_tema'] === 'oscuro') ? 'oscuro' : 'claro';
    setcookie('user_tema', $nuevo_tema, time() + (86400 * 30), "/");
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
}

$tema_activo = $_COOKIE['user_tema'] ?? 'claro';

function escape($dato) {
    return htmlspecialchars($dato ?? '', ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Web - Parcial 2</title>
    <link rel="stylesheet" href="css/tema-<?php echo escape($tema_activo); ?>.css">
</head>
<body>
<header class="header-principal">
    <div class="contenedor header-flex">
        <h1 class="logo">Portal Web II</h1>
        <div class="opciones-tema">
            <span>Aspecto:</span>
            <a href="?cambiar_tema=claro" class="btn-tema">Claro</a>
            <a href="?cambiar_tema=oscuro" class="btn-tema">Oscuro</a>
        </div>
    </div>
</header>