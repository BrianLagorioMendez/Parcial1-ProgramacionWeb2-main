<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark</title>
    <link rel="stylesheet" href="./style/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="IMAGENES/favicondark4.png" type="image/x-icon">
</head>

<body>

<?php
$errores = [];
$exito = false;

//valida que la peticion se haya recibido por el metodo POST//
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
   
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $apellido = isset($_POST['apellido']) ? trim($_POST['apellido']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $motivo = isset($_POST['motivo']) ? trim($_POST['motivo']) : '';
    $mensaje = isset($_POST['mensaje']) ? trim($_POST['mensaje']) : '';

    //valida que los campos obligatorios no esten vacios//
    if (empty($nombre) || empty($apellido) || empty($email) || empty($motivo) || empty($mensaje)) {
        $errores[] = "Todos los campos del formulario son obligatorios.";
    }

    //valida longitud minima razonable del nombre y apellido//
    if (!empty($nombre) && strlen($nombre) < 3) {
        $errores[] = "El nombre debe tener al menos 3 caracteres.";
    }
    if (!empty($apellido) && strlen($apellido) < 3) {
        $errores[] = "El apellido debe tener al menos 3 caracteres.";
    }

    //valida formato de correo//
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo electrónico ingresado no tiene un formato válido.";
    }

    //si no hay errores, sanitizamos para renderizar en HTML de forma segura//
    if (empty($errores)) {
        $exito = true;
        $nombreSanitizado = htmlspecialchars($nombre);
        $apellidoSanitizado = htmlspecialchars($apellido);
        $emailSanitizado = htmlspecialchars($email);
        $motivoSanitizado = htmlspecialchars($motivo);
        $mensajeSanitizado = htmlspecialchars($mensaje);

        //mapear texto contextualizado segun motivo//
        $textosMotivo = [
            'consulta' => 'Recibimos tu consulta sobre la trama. La analizaremos detalladamente.',
            'sugerencia' => 'Agradecemos tu sugerencia para seguir mejorando nuestro sitio.',
            'teoria' => 'Tu teoría ha sido registrada en los archivos de Winden.',
            'otro' => 'Tu mensaje ha sido derivado al equipo correspondiente.'
        ];
        $contextoMotivo = isset($textosMotivo[$motivoSanitizado]) ? $textosMotivo[$motivoSanitizado] : 'Gracias por ponerte en contacto.';
    }

} else {
    //si intenta ingresar directamente por URL (GET)//
    $errores[] = "Acceso indebido: Debes enviar el formulario de contacto para acceder a esta página.";
}

require_once __DIR__ . '/componentes/header.php';
?>

<section class="confirmacion">
    <img src="IMAGENES/favicondark4.png" alt="Triqueta" class="triqueta">

    <?php if ($exito): ?>
        <h2>SIC MUNDUS ha recibido tu mensaje, <?= $nombreSanitizado . ' ' . $apellidoSanitizado ?>.</h2>
        
        <p class="mensaje">El ciclo continúa.</p>
        
        <p>
            Confirmamos el registro de tu consulta vinculada al correo <strong><?= $emailSanitizado ?></strong>.
        </p>
        
        <div class="resumen-datos" style="background: rgba(0,0,0,0.5); padding: 20px; border-radius: 8px; margin: 20px auto; max-width: 600px; text-align: left;">
            <p><strong>Motivo:</strong> <?= ucfirst($motivoSanitizado) ?></p>
            <p><strong>Nota:</strong> <?= $contextoMotivo ?></p>
            <p><strong>Mensaje enviado:</strong></p>
            <blockquote style="font-style: italic; border-left: 3px solid #d4af37; padding-left: 10px; color: #ccc;">
                "<?= $mensajeSanitizado ?>"
            </blockquote>
        </div>

        <p>
            En Winden, cada decisión tiene consecuencias... y cada mensaje encuentra su destino.
        </p>

    <?php else: ?>
        <h2>Ocurrió un inconveniente</h2>
        <div class="errores-box" style="background: rgba(200, 0, 0, 0.3); border: 1px solid red; padding: 15px; margin: 20px auto; max-width: 600px; border-radius: 5px;">
            <ul style="list-style: none; padding: 0;">
                <?php foreach ($errores as $error): ?>
                    <li style="color: #ffcccc; margin-bottom: 5px;">⚠️ <?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <a href="./contacto.php" class="boton" style="display: inline-block; margin-top: 15px;">Volver al Formulario de Contacto</a>
    <?php endif; ?>

    <a href="./index.php" class="boton" style="margin-top: 15px;">Volver al Inicio</a>

    <p class="frase">"El principio es el fin y el fin es el principio."</p>
    <h3 class="sicmundus">SIC MUNDUS CREATUS EST</h3>
</section>

<?php require_once __DIR__ . '/componentes/footer.php'; ?>
</body>

</html>
