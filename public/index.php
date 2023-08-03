<?php
    require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="page-name" content="Home">
    <?= setIcons() ?>
    <?= WebTools\PageBuilder::setCustomBootstrap() ?>
    <title>El Cafecito</title>
</head>
<body>
    <?= WebTools\PageBuilder::buildHeader() ?>
    <main class="container-fluid my-4 text-dark fs-5">
        Something...
    </main>
    <!-- JavaScript scripts -->
    <?= WebTools\PageBuilder::setScripts() ?>
</body>
</html>