<?php
    $nombre_carpeta = $_POST['DIRECTORY']; // Reemplaza 'nombre_de_la_carpeta' por el nombre enviado anteriormente
    $directorio = $_SERVER['DOCUMENT_ROOT'] . ($_SERVER['HTTP_HOST'] === 'cafecito.com' ? '' : "/$nombre_carpeta/");
    require $directorio . 'vendor/autoload.php';
    
    use WebTools\PageBuilder;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="page-name" content="Menú">
    <?= PageBuilder::buildIcons() ?>
    <?= PageBuilder::buildCustomBootstrap() ?>
    <title>Menú</title>
</head>
<body>
    <?= PageBuilder::buildHeader() ?>
    <article class="container-fluid my-4">
        Something
    </article>
    <!-- JavaScript scripts -->
    <?= PageBuilder::buildScripts() ?>
</body>
</html>