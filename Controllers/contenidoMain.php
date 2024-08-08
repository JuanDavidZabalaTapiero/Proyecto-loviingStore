<?php

require_once (__DIR__ . '/../Models/consultasProductos.php');

require_once (__DIR__ . '/../Models/consultasCategorias.php');

class ContenidoMain
{
    public $objConsultasProductos;

    public $objConsultasCategorias;

    public function __construct()
    {
        $this->objConsultasProductos = new ConsultasProductos();

        $this->objConsultasCategorias = new ConsultasCategorias();
    }

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

                                            <li><a class="dropdown-item @@terms" href="<?php echo $urls['allProductos.php'] ?>">Ver Todos los
                                                    Productos</a></li>

                                            <li><a class="dropdown-item @@terms"
                                                    href="<?php echo $urls['ad-list-view2.php'] ?>">Ver Productos en lista</a>
                                            </li>
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
                                        <a class="nav-link login-button"
                                            href="<?php echo $urls['iniciarSesion.php'] ?>">Login</a>
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

    public function showFooter()
    {
        ?>
        <footer class="footer-bottom">
            <!-- Container Start -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
                        <!-- Copyright -->
                        <div class="copyright">
                            <p>Copyright &copy;
                                <script>
                                    var CurrentYear = new Date().getFullYear()
                                    document.write(CurrentYear)
                                </script> - Loviing Store
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Social Icons -->
                        <ul class="social-media-icons text-center text-lg-right">
                            <li><a class="fa-brands fa-instagram" href="https://www.facebook.com/themefisher"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Container End -->
            <!-- To Top -->
            <div class="scroll-top-to">
                <i class="fa fa-angle-up"></i>
            </div>
        </footer>
        <?php
    }

    public function showSearchBar()
    {
        $arraySelectAllCategorias = $this->objConsultasCategorias->selectAllCategorias();

        $filas = $arraySelectAllCategorias['filas'];

        if ($filas == 0) {
            return;
        }

        ?>
        <div class="advance-search">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 align-content-center">
                        <form method="post" action="">
                            <input type="hidden" name="form" value="buscar_p">
                            <div class="form-row">
                                <div class="form-group col-xl-6 col-lg-6 col-md-6">
                                    <input type="text" name="palabra" class="form-control my-2 my-lg-1" id="inputtext4"
                                        placeholder="¿Qué quieres buscar?">
                                </div>
                                <div class="form-group col-xl-4 col-lg-4 col-md-6">
                                    <select class="w-100 form-control mt-lg-1 mt-md-2" id="categorias_buscador"
                                        name="categorias">
                                        <option value="no_value">Categorías</option>

                                        <?php
                                        if ($filas == 1) {
                                            $fCat = $arraySelectAllCategorias['resultado'];

                                            ?>
                                            <option value="<?php echo $fCat["id_categoria"] ?>">
                                                <?php echo $fCat["nombre_categoria"] ?>
                                            </option>
                                            <?php
                                        }

                                        if ($filas == 2) {
                                            $fCategorias = $arraySelectAllCategorias['resultados'];

                                            foreach ($fCategorias as $fCat) {
                                                ?>
                                                <option value="<?php echo $fCat["id_categoria"] ?>">
                                                    <?php echo $fCat["nombre_categoria"] ?>
                                                </option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group col-xl-2 col-lg-2 col-md-12 align-self-center">
                                    <button type="submit" class="btn btn-buscador active w-100 ">Buscar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    public function showSearchedProducts($palabra, $urlProductsImg, $urlProducto, $cod_categoria = null)
    {
        // CONSULTO LOS PRODUCTOS QUE COINCIDAN CON LO BUSCADO
        $arraySelectProductosLike = $this->objConsultasProductos->selectProductosLike($palabra, $cod_categoria);

        $filas = $arraySelectProductosLike['filas'];

        if ($filas == 0) {
            ?>
            <section class="popular-deals section bg-gray">
                <div class="section-title">
                    <h2>No se encontró el producto :C</h2>
                </div>
            </section>

            <?php
        } elseif ($filas == 1) {
            $fProducto = $arraySelectProductosLike['resultado'];

            ?>
            <section class="popular-deals section bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Producto/s buscado/s</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- offer 01 -->
                        <div class="col-lg-12">
                            <div class="trending-ads-slide">
                                <div class="col-sm-12 col-lg-12">
                                    <!-- product card -->
                                    <div class="product-item bg-light">
                                        <div class="card">
                                            <div class="thumb-content">
                                                <a
                                                    href="<?php echo $urlProducto ?>single.php?idProd=<?php echo $fProducto["id_producto"] ?>">
                                                    <img class="card-img-top img-fluid"
                                                        src="<?php echo $urlProductsImg ?><?php echo $fProducto["foto1_producto"] ?>"
                                                        alt="Card image cap">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title"><a
                                                        href="<?php echo $urlProducto ?>single.php?idProd=<?php echo $fProducto["id_producto"] ?>"><?php echo $fProducto["nombre_producto"] ?></a>
                                                </h4>
                                                <ul class="list-inline product-meta">
                                                    <li class="list-inline-item">
                                                        <a
                                                            href="<?php echo $urlProducto ?>single.php?idProd=<?php echo $fProducto["id_producto"] ?>"><i
                                                                class="fa fa-folder-open-o"></i><?php echo $fProducto["nombre_categoria"] ?></a>
                                                    </li>
                                                </ul>
                                                <h4>$ <?php echo number_format($fProducto["precio_producto"], 0, ',', '.'); ?></h4>
                                                <p class="card-text"><?php echo $fProducto["descripcion_producto"] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        } elseif ($filas == 2) {
            $fProductos = $arraySelectProductosLike['resultados'];

            ?>
            <section class="popular-deals section bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Producto/s buscado/s</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- offer 01 -->
                        <div class="col-lg-12">
                            <div class="trending-ads-slide">
                                <?php
                                foreach ($fProductos as $fProducto) {
                                    ?>
                                    <div class="col-sm-12 col-lg-12">
                                        <!-- product card -->
                                        <div class="product-item bg-light">
                                            <div class="card">
                                                <div class="thumb-content">
                                                    <a
                                                        href="<?php echo $urlProducto ?>single.php?idProd=<?php echo $fProducto["id_producto"] ?>">
                                                        <img class="card-img-top img-fluid"
                                                            src="<?php echo $urlProductsImg ?><?php echo $fProducto["foto1_producto"] ?>"
                                                            alt="Card image cap">
                                                    </a>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="card-title"><a
                                                            href="<?php echo $urlProducto ?>single.php?idProd=<?php echo $fProducto["id_producto"] ?>"><?php echo $fProducto["nombre_producto"] ?></a>
                                                    </h4>
                                                    <ul class="list-inline product-meta">
                                                        <li class="list-inline-item">
                                                            <a
                                                                href="<?php echo $urlProducto ?>single.php?idProd=<?php echo $fProducto["id_producto"] ?>"><i
                                                                    class="fa fa-folder-open-o"></i><?php echo $fProducto["nombre_categoria"] ?></a>
                                                        </li>
                                                    </ul>
                                                    <h4>$ <?php echo number_format($fProducto["precio_producto"], 0, ',', '.'); ?></h4>
                                                    <p class="card-text"><?php echo $fProducto["descripcion_producto"] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
    }
}
