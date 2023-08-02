<?php
    require '../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="page-name" content="Home">
    <?= setIcons() ?>
    <?= setCustomBootstrap() ?>
    <title>El Cafecito</title>
</head>
<body>
    <header class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid">
            <h1 class="text-light display-3">El Cafecito</h1>
            <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <span class="bi bi-list display-6 icon-custom"></span>
            </button>

            <!-- Offcanvas -->
            <div class="offcanvas offcanvas-end bg-secondary text-light" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasRightLabel">A</h5>
                    <button type="button" class="btn btn-custom" data-bs-dismiss="offcanvas" aria-label="Close">
                        <span class="bi bi-x h4"></span>
                    </button>
                </div>
                <div class="offcanvas-body" id="canvas-body">
                    Hello
                </div>
            </div>
        </div>
    </header>
    <main class="container-fluid my-4">
        Something
    </main>
    <!-- JavaScript scripts -->
    <?= setScripts() ?>
</body>
</html>