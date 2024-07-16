<?php

require_once('Controllers/Cliente/mostrarContenido.php');

require_once('Controllers/Cliente/mostrarInfoProducto.php');

require_once('Models/consultasAdmin.php');

require_once('Models/consultasCliente.php');

// CONTENIDO DEL CLIENTE
require_once(__DIR__ . '/Controllers/Cliente/contenidoCliente.php');
$objContenidoCliente = new ContenidoCliente();

?>
<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

	<!-- ** Basic Page Needs ** -->
	<meta charset="utf-8">
	<title>Loviing Store | E-commerce</title>

	<!-- ** Mobile Specific Metas ** -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Agency HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Themefisher">
	<meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

	<!-- theme meta -->
	<meta name="theme-name" content="classimax" />

	<!-- favicon -->
	<link href="Views/Website_externo/images/favicon.png" rel="shortcut icon">

	<!-- 
  Essential stylesheets
  =====================================-->
	<link href="Views/Website_externo/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="Views/Website_externo/plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
	<link href="Views/Website_externo/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="Views/Website_externo/plugins/slick/slick.css" rel="stylesheet">
	<link href="Views/Website_externo/plugins/slick/slick-theme.css" rel="stylesheet">
	<link href="Views/Website_externo/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

	<link href="Views/Website_externo/css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper">
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-light navigation">
						<a class="navbar-brand" href="index.php">
							<h2>Loviing Store</h2>
						</a>

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto main-nav ">
								<li class="nav-item active">
									<a class="nav-link" href="index.php">Inicio</a>
								</li>

								<li class="nav-item dropdown dropdown-slide @@pages">
									<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Contenido <span><i class="fa fa-angle-down"></i></span>
									</a>
									<!-- Dropdown list -->
									<ul class="dropdown-menu">
										<li><a class="dropdown-item @@about" href="Views/Website_externo/about-us.php">Sobre nosotros</a></li>

										<li><a class="dropdown-item @@contact" href="Views/Website_externo/contact-us.php">Contácto</a></li>

										<li><a class="dropdown-item @@terms" href="Views/Website_externo/terms-condition.php">Términos y
												Condiciones</a></li>
									</ul>
								</li>

								<li>
									<a href="Views/Extras/iniciarSesion.php">
										<svg xmlns="http://www.w3.org/2000/svg" height="32" width="36" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
											<path fill="#ca5d1e" d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
										</svg>
									</a>
								</li>
							</ul>

							<ul class="navbar-nav ml-auto mt-10">
								<li class="nav-item">
									<a class="nav-link login-button" href="Views/Extras/iniciarSesion.php">Login</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<!--===============================
	=            Hero Area            =
	================================-->

	<section class="hero-area bg-1 text-center overly">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Header Contetnt -->
					<div class="content-block">
						<h1>Productos para mascotas, juguetes y más 🐈</h1>

					</div>
					<!-- Advance Search -->
					<div class="advance-search">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 align-content-center">
									<form>
										<div class="form-row">
											<div class="form-group col-xl-6 col-lg-6 col-md-6">
												<input type="text" class="form-control my-2 my-lg-1" id="inputtext4" placeholder="¿Qué quieres buscar?">
											</div>
											<div class="form-group col-xl-4 col-lg-4 col-md-6">
												<select class="w-100 form-control mt-lg-1 mt-md-2">
													<option>Categorías</option>
													<option value="1">Top rated</option>
													<option value="2">Lowest Price</option>
													<option value="4">Highest Price</option>
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
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>


	<!--===========================================
	=            Popular deals section            =
	============================================-->

	<section class="popular-deals section bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>En Tendencia</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- offer 01 -->
				<div class="col-lg-12">
					<div class="trending-ads-slide">

						<?php
						$urlProductsImg = "Uploads/Productos/";
						$urlProducto = "Views/Website_externo/single.php";
						$objContenidoCliente->showHomeProducts($urlProductsImg, $urlProducto);
						?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<!--==========================================
	=            All Category Section            =
	===========================================-->

	<section class=" section">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Section title -->
					<div class="section-title">
						<h2>Categorías</h2>
					</div>
					<div class="row">
						<!-- Category list -->
						<?php
						mostrarCategorias();
						?>
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>

	<!--============================
	=            Footer            =
	=============================-->

	<!-- Footer Bottom -->
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
						<li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher"></a></li>
						<li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher"></a></li>
						<li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher"></a></li>
						<li><a class="fa fa-github-alt" href="https://www.github.com/themefisher"></a></li>
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

	<!-- Essential Scripts
	=====================================-->
	<script src="Views/Website_externo/plugins/jquery/jquery.min.js"></script>
	<script src="Views/Website_externo/plugins/bootstrap/popper.min.js"></script>
	<script src="Views/Website_externo/plugins/bootstrap/bootstrap.min.js"></script>
	<script src="Views/Website_externo/plugins/bootstrap/bootstrap-slider.js"></script>
	<script src="Views/Website_externo/plugins/tether/js/tether.min.js"></script>
	<script src="Views/Website_externo/plugins/raty/jquery.raty-fa.js"></script>
	<script src="Views/Website_externo/plugins/slick/slick.min.js"></script>
	<script src="Views/Website_externo/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<!-- google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
	<script src="Views/Website_externo/plugins/google-map/map.js" defer></script>

	<script src="Views/Website_externo/js/script.js"></script>

</body>

</html>