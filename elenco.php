<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark | Elenco</title>
    <link rel="stylesheet" href="./style/estilos.css">
    <link rel="stylesheet" href="./style/personajes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="./IMAGENES/favicondark4.png" type="image/x-icon">
</head>

<body>
    
    <?php require_once __DIR__ . '/data/elenco_data.php';?>
    <?php require_once __DIR__ . '/componentes/header.php'; ?>

    <section class="presentacion">
        <div class="cajaelenco">
            <img src="./IMAGENES/favicondark4.png" alt="Triqueta" class="triqueta">
            <h2>Elenco Principal</h2>
            <p class="subtitulo">Cada personaje forma parte del ciclo.</p>
            <p class="descripcion">
                En Dark, cada decisión, cada familia y cada línea temporal están conectadas.
                Conoce a los protagonistas que dieron vida al complejo universo de Winden.
            </p>
        </div>
    </section>

    <section class="actores">
        <?php foreach ($elenco as $item): ?>
            <div class="actor <?= $item['destacado'] ? 'destacado' : '' ?>">
                <img src="./IMAGENES/<?= htmlspecialchars($item['imagen']) ?>" alt="<?= htmlspecialchars($item['personaje']) ?>">
                <h4><?= htmlspecialchars($item['actor']) ?></h4>
                <p>Personaje: <?= htmlspecialchars($item['personaje']) ?></p>
                <p class="desc"><?= htmlspecialchars($item['descripcion']) ?></p>
            </div>
        <?php endforeach; ?>
    </section>

    <?php require_once __DIR__ . '/componentes/footer.php'; ?>

</body>
</html>