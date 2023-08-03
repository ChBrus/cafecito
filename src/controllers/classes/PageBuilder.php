<?php
    namespace WebTools;

    class PageBuilder{
        public static function buildHeader() {
            ob_start();
            ?>
                <header class="navbar navbar-expand-xxl bg-secondary">
                    <div class="container-fluid">
                        <h1 class="text-light display-3">El Cafecito</h1>
                        <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <span class="bi bi-list display-6 icon-custom"></span>
                        </button>

                        <!-- Offcanvas -->
                        <div class="offcanvas offcanvas-end bg-fourth text-light" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasRightLabel">Explorador</h5>
                                <button type="button" class="btn btn-custom" data-bs-dismiss="offcanvas" aria-label="Close">
                                    <span class="bi bi-x h4"></span>
                                </button>
                            </div>
                            <div class="offcanvas-body" id="canvas-body">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/public/">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/public/menu/">Menú</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/public/pre-ordenar/">Pre-ordenar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
            <?php
            return ob_get_clean();
        }

        public static function setScripts() {
            ob_start();
            ?>
                <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
                <script src="/src/assets/js/canvasBody.js"></script>
            <?php
            return ob_get_clean();
        }

        public static function setCustomBootstrap() {
            ob_start();
            ?>
            <link rel="stylesheet" href="/src/assets/css/boostrap.css">
            <link rel="stylesheet" href="/src/assets/css/bootstrap-icons.css">
            <?php
            return ob_get_clean();
        }
    }
?>