<?php
    require $_POST['DIRECTORY'] . 'vendor/autoload.php';

    use WebTools\PageBuilder;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="page-name" content="Home">
    <?= PageBuilder::buildIcons($_POST['ROOT']) ?>
    <?= PageBuilder::buildCustomBootstrap($_POST['ROOT']) ?>
    <title>El Cafecito</title>
</head>
<body>
    <?= PageBuilder::buildHeader($_POST['ROOT']) ?>
    <main class="container-sm" id="NewsStand">
        <h2 class="">¿Qué hay de nuevo?</h2>
        <?= PageBuilder::buildNewsStand() ?>
    </main>
    <!-- JavaScript scripts -->
    <?= PageBuilder::buildScripts($_POST['ROOT']) ?>
</body>
</html>