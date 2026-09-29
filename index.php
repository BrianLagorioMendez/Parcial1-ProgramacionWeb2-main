<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="./style/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="IMAGENES/favicondark4.png" type="image/x-icon">
</head>

<body>


   <?php require_once __DIR__ . '/componentes/header.php'; ?>

<section class="bienvenida">

    <div class="cajabienvenida">

        <img src="IMAGENES/favicondark4.png" alt="Triqueta" class="triqueta">

        <h2>Bienvenido a Winden</h2>

        <p class="subtitulo">

            Todo está conectado.

        </p>

        <p class="descripcion">

            Dark es mucho más que una serie sobre viajes en el tiempo.
            Es una historia donde el destino, los secretos familiares y las decisiones de cada generación
            forman parte de un mismo ciclo.

            Descubre el universo creado por Baran bo Odar y Jantje Friese.

        </p>

    </div>

</section>



<section class="intro">

    <div class="bloqueintro">

        <div class="texto">

            <h3>La historia comienza aquí</h3>

            <p>

                La desaparición de un niño en el pequeño pueblo de Winden revela una red de secretos
                que conecta a cuatro familias a través de distintas épocas.

                A medida que la historia avanza, pasado, presente y futuro dejan de ser conceptos separados
                para convertirse en un único ciclo.

            </p>

        </div>

        <div class="imagen">

            <img src="IMAGENES/darkportada3.jpg" alt="Dark">

        </div>

    </div>

</section>



<section class="trailer">

    <div class="cajatrailer">

        <h2>Descubre el comienzo del ciclo</h2>

        <p>

            Mira el tráiler oficial y prepárate para entrar en un mundo donde el tiempo deja de ser lineal.

        </p>

        <video controls class="video1">

            <source src="./video/darkvideo1.mp4" type="video/mp4">

        </video>

    </div>

</section>




  <?php require_once __DIR__ . '/componentes/footer.php'; ?>

</body>

</html>
