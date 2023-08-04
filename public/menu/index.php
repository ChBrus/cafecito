<?php
    require $_SERVER['DOCUMENT_ROOT'] . ($_SERVER['HTTP_HOST'] === 'cafecito.com' ? '' : '/cafecito/') . '/vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="page-name" content="Menú">
    <?= setIcons() ?>
    <?= WebTools\PageBuilder::setCustomBootstrap() ?>
    <title>Menú</title>
</head>
<body>
    <?= WebTools\PageBuilder::buildHeader() ?>
    <main class="container-fluid my-4">
        Something
    </main>
    <!-- JavaScript scripts -->
    <?= WebTools\PageBuilder::setScripts() ?>
</body>
</html>