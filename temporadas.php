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


<section class="temporadas">

    <h2>Temporadas</h2>


    <div class="portemporada">
        <img src="IMAGENES/jonastemp1.webp" alt="imagen jonas temporada 1">

        <div class="overlay">
            <h3>Temporada 1</h3>
            <p>La desaparición de un niño revela secretos oscuros en Winden.</p>
        </div>
    </div>

    
    <div class="portemporada">
        <img src="IMAGENES/jonastemp2.jpg" alt="imagen jonas temporada 2">

        <div class="overlay">
            <h3>Temporada 2</h3>
            <p>El tiempo se vuelve más complejo y las conexiones se intensifican.</p>
        </div>
    </div>

    
    <div class="portemporada">
        <img src="IMAGENES/temp3foto.webp" alt="imagen temporada 3">

        <div class="overlay">
            <h3>Temporada 3</h3>
            <p>Dos mundos chocan en el final del ciclo.</p>
        </div>
    </div>

</section>





<?php require_once __DIR__ . '/componentes/footer.php'; ?>

</body>

</html>
