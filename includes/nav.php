<?php require_once __DIR__ . '/header.php'; ?>
<nav class="nav-principal">
    <div class="contenedor">
        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <?php if (isset($_SESSION['usuario_id'])): ?>
                <li><a href="perfil.php">Mi Cuenta</a></li>
                <li class="usuario-info">
                    Bienvenido, <strong><?php echo escape($_SESSION['usuario_nombre']); ?></strong>
                    <a href="logout.php" class="btn-logout">(Salir)</a>
                </li>
            <?php else: ?>
                <li class="nav-derecha"><a href="login.php">Ingresar</a></li>
                <li class="nav-derecha"><a href="registro.php">Registrarse</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<main class="contenedor contenido-app">
<?php
if (isset($_SESSION['flash_mensaje'])) {
    $clase_alerta = $_SESSION['flash_tipo'] ?? 'info';
    echo '<div class="msg-flash msg-' . escape($clase_alerta) . '">' . escape($_SESSION['flash_mensaje']) . '</div>';
    unset($_SESSION['flash_mensaje'], $_SESSION['flash_tipo']);
}
?>