<?php
// holaaaaaaaaaaaaa
require_once('Controllers/Cliente/mostrarContenido.php');

require_once('Controllers/Cliente/mostrarInfoProducto.php');

require_once('Models/consultasAdmin.php');

require_once('Models/consultasCliente.php');

// CONTENIDO DEL CLIENTE
require_once(__DIR__ . '/Controllers/Cliente/contenidoCliente.php');
$objContenidoCliente = new ContenidoCliente();

// CONTENIDO PRINCIPAL
require_once(__DIR__ . '/Controllers/contenidoMain.php');
$objContenidoMain = new ContenidoMain();

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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="body-wrapper">

	<!-- HEADER -->
	<?php
	$urls = [
		'index.php' => 'index.php',
		'about-us.php' => 'Views/Website_externo/about-us.php',
		'contact-us.php' => 'Views/Website_externo/contact-us.php',
		'terms-condition.php' => 'Views/Website_externo/terms-condition.php',
		'category2.php' => 'Views/Website_externo/category2.php',
		'ad-list-view2.php' => 'Views/Website_externo/ad-list-view2.php',
		'iniciarSesion.php' => 'Views/Extras/iniciarSesion.php',
		'crearCuenta' => 'Views/Extras/crearCuenta.html'
	];

	$objContenidoMain->showHeader($urls);
	?>

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
									<form method="post" action="">
										<div class="form-row">
											<div class="form-group col-xl-6 col-lg-6 col-md-6">
												<input type="text" name="palabra" class="form-control my-2 my-lg-1" id="inputtext4" placeholder="¿Qué quieres buscar?">
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
	<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$palabra = $_POST["palabra"];

		$urlProductsImg = "Uploads/Productos/";

		$objContenidoMain->showSearchedProducts($palabra, $urlProductsImg);
	}
	?>

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
	<?php
	$objContenidoMain->showFooter();
	?>

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