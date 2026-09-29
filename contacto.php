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

<?php require_once __DIR__ . '/componentes/header.php'; ?>

<section class="contactos">
    <div class="cajacontacto">
        <img src="./IMAGENES/favicondark4.png" alt="Triqueta" class="triqueta">
        <h2>Contacto</h2>
        <p class="subtitulo">¿Tienes un mensaje para SIC MUNDUS?</p>
        <p class="descripcion">
            Toda decisión deja una marca en el tiempo.
            Comparte con nosotros tu opinión, sugerencia o consulta.
        </p>

        <form action="./confirmacion.php" method="POST">
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required minlength="3" maxlength="30">
            </div>

            <div>
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" placeholder="Ingresa tu apellido" required minlength="3" maxlength="30">
            </div>

            <div>
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="ejemplo@email.com" required>
            </div>

            <div>
                <label for="motivo">Motivo de contacto</label>
                <select id="motivo" name="motivo" required>
                    <option value="">Selecciona un motivo</option>
                    <option value="consulta">Consulta sobre la trama</option>
                    <option value="sugerencia">Sugerencia para el sitio</option>
                    <option value="teoria">Compartir una teoría</option>
                    <option value="otro">Otro asunto</option>
                </select>
            </div>

            <div>
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" rows="8" placeholder="Escribe tu mensaje..." required minlength="15"></textarea>
            </div>

            <button type="submit">Enviar a SIC MUNDUS</button>
        </form>

        <p class="frase">"El tiempo no es lineal. Cada mensaje encuentra su destino."</p>
    </div>
</section>

<?php require_once __DIR__ . '/componentes/footer.php'; ?>

</body>

</html>
