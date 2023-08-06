<?php
    require $_POST['DIRECTORY'] . 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="page-name" content="Pre-ordenar">
    <?= WebTools\PageBuilder::buildIcons($_POST['ROOT']) ?>
    <?= WebTools\PageBuilder::buildCustomBootstrap($_POST['ROOT']) ?>
    <title>Pre ordenar</title>
</head>
<body>
    <?= WebTools\PageBuilder::buildHeader($_POST['ROOT']) ?>
    <main class="container-fluid my-4">
        Something
    </main>
    <!-- JavaScript scripts -->
    <?= WebTools\PageBuilder::buildScripts($_POST['ROOT']) ?>
</body>
</html>