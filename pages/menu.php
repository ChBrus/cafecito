<?php
    require $_POST['DIRECTORY'] . 'vendor/autoload.php';
    
    use WebTools\PageBuilder;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="page-name" content="Menú">
    <?= PageBuilder::buildIcons($_POST['ROOT']) ?>
    <?= PageBuilder::buildCustomBootstrap($_POST['ROOT']) ?>
    <title>Menú</title>
</head>
<body>
    <?= PageBuilder::buildHeader($_POST['ROOT']) ?>
    <article class="container-fluid my-4">
        Something
    </article>
    <!-- JavaScript scripts -->
    <?= PageBuilder::buildScripts($_POST['ROOT']) ?>
</body>
</html>