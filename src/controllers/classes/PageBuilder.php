<?php
    namespace WebTools;
    
    $HOME = substr($_SERVER['SCRIPT_FILENAME'], 0, strpos($_SERVER['SCRIPT_FILENAME'], '/cafecito/') + 10);

    class PageBuilder{
        // Default builders

        /**
         * Retorna un header para que todo el sitio tenga el mismo estilo de cabecera
         * @param mixed $root La raíz de mi proyecto
         * @return mixed Cabeceras que estarán en todo el sitio web
        */
        public static function buildHeader($root) {
            ob_start();
            ?>
                <header class="navbar navbar-expand-xxl navbar-theme">
                    <div class="container-fluid">
                        <h1 class="display-3">El Cafecito</h1>
                        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <span class="bi bi-list display-6 icon-custom"></span>
                        </button>

                        <!-- Offcanvas -->
                        <div class="offcanvas offcanvas-end offcanvas-theme" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasRightLabel">Explorador</h5>
                                <button type="button" class="btn btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body vstack" id="canvas-body">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= $root ?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= $root ?>menu/">Menú</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= $root ?>pre-ordenar/">Pre-ordenar</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Configuración</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="<?= $root ?>sign-in/">Sign-in</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Log-in</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Cuenta</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="dropdown dropup mt-auto">
                                    <button class="btn btn-link px-0 text-decoration-none dropdown-toggle d-flex align-items-center fs-5 ms-auto" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme (auto)">
                                        <span class="bi bi-circle-half" id="bd-theme-text" theme-icon-active></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme">
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false" id="theme-option">
                                            <span class="bi bi-brightness-high-fill" id="bd-theme-text"></span>
                                            &nbsp;
                                            Light
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark-custom" aria-pressed="false" id="theme-option">
                                            <span class="bi bi-moon-stars-fill" id="bd-theme-text"></span>
                                            &nbsp;
                                            Dark
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false" id="theme-option">
                                            <span class="bi bi-circle-half" id="bd-theme-text"></span>
                                            &nbsp;
                                            Auto
                                        </button>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            <?php
            return ob_get_clean();
        }

        public static function buildScripts($root) {
            ob_start();
            ?>
                <script src="<?= $root ?>vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
                <script type="module" src="<?= $root ?>src/assets/js/color-modes.js"></script>
                <script src="<?= $root ?>src/assets/js/canvasBody.js"></script>
            <?php
            return ob_get_clean();
        }

        public static function buildCustomBootstrap($root) {
            ob_start();
            ?>
                <link rel="stylesheet" href="<?= $root ?>src/assets/css/boostrap.css">
                <link rel="stylesheet" href="<?= $root ?>src/assets/css/bootstrap-icons.css">
            <?php
            return ob_get_clean();
        }

        public static function buildIcons($root) {
            ob_start();
            ?>
                <link rel="icon" href="<?= $root ?>src/assets/images/cafecito_icon.png" sizes="16x16" type="image/x-icon">
                <link rel="icon" href="<?= $root ?>src/assets/images/cafecito_icon.png" sizes="32x32" type="image/x-icon">
                <link rel="icon" href="<?= $root ?>src/assets/images/cafecito_icon.png" sizes="64x64" type="image/x-icon">
                <link rel="icon" href="<?= $root ?>src/assets/images/cafecito_icon.png" sizes="128x128" type="image/x-icon">
            <?php
            return ob_get_clean();
        }

        public static function buildNewsStand() {
            ob_start();
            ?>
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active d-flex justify-content-center">
                            <div class="alert alert-info" role="alert">
                                No hay noticias nuevas...
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            <?php
            return ob_get_clean();
        }
    }
?>