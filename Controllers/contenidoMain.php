<?php

class ContenidoMain
{
    public function showHeader($urls)
    {
        ?>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light navigation">
                            <a class="navbar-brand" href="<?php echo $urls['index.php'] ?>">
                                <h2>Loviing Store</h2>
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto main-nav ">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="<?php echo $urls['index.php'] ?>">Inicio</a>
                                    </li>

                                    <li class="nav-item dropdown dropdown-slide @@pages">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Contenido <span><i class="fa fa-angle-down"></i></span>
                                        </a>
                                        <!-- Dropdown list -->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item @@about"
                                                    href="<?php echo $urls['about-us.php'] ?>">Sobre
                                                    nosotros</a></li>

                                            <li><a class="dropdown-item @@contact"
                                                    href="<?php echo $urls['contact-us.php'] ?>">Contácto</a></li>

                                            <li><a class="dropdown-item @@terms"
                                                    href="<?php echo $urls['terms-condition.php'] ?>">Términos y
                                                    Condiciones</a></li>

                                            <li><a class="dropdown-item @@terms"
                                                    href="<?php echo $urls['category2.php'] ?>">Ver Productos</a></li>

                                            <li><a class="dropdown-item @@terms"
                                                    href="<?php echo $urls['ad-list-view2.php'] ?>">Ver Productos en lista</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="<?php echo $urls['iniciarSesion.php'] ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="32" width="36"
                                                viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path fill="#ca5d1e"
                                                    d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>

                                <ul class="navbar-nav ml-auto mt-10">
                                    <li class="nav-item">
                                        <a class="nav-link login-button" href="<?php echo $urls['iniciarSesion.php'] ?>">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white add-button"
                                            href="<?php echo $urls['crearCuenta'] ?>">Registrarse</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <?php
    }
}