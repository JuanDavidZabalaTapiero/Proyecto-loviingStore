<?php
session_start();

$id_cliente = $_SESSION["idUser"];

$id_producto = $_GET["idProd"];

require_once('../../Controllers/Cliente/mostrarContenido.php');

require_once('../../Controllers/Cliente/mostrarInfoProducto.php');

require_once('../../Models/consultasAdmin.php');

require_once('../../Models/consultasCliente.php');

require_once(__DIR__ . '/../../Controllers/Cliente/contenidoCliente.php');
$objContenidoCliente = new ContenidoCliente();

// COMPRA
require_once(__DIR__ . '/../../Controllers/Cliente/compraController.php');
$objCompraController = new CompraController();

// AGREGAR ITEM AL CARRITO
require_once(__DIR__ . '/../../Controllers/Cliente/agregarItemCarritoController.php');
$objAgregarItemCarritoController = new AgregarItemCarritoController();

// CREAR PREFERENCIA MERCADO PAGO
require_once(__DIR__ . '/../../Controllers/Cliente/makePreference.php');
$objCreatePreferenceMercadoPago = new CreatePreferenceMercadoPago();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$form = $_POST["form"];

	$cantidad = $_POST["cantidad"];

	if ($form == "comprar") {
		// $objCompraController->comprarProducto($id_cliente, $id_producto, $cantidad);

		// header('location: red.php');

		$objCreatePreferenceMercadoPago->makePreference($id_producto, $cantidad);
	}

	if ($form == "carrito") {
		$objAgregarItemCarritoController->agregarItemCarrito($id_cliente, $id_producto, $cantidad);
	}
}

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
	<title>Loviing Store | Producto</title>

	<!-- ** Mobile Specific Metas ** -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Agency HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Themefisher">
	<meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

	<!-- favicon -->
	<link href="../Website_externo/images/favicon.png" rel="shortcut icon">

	<!-- Essential stylesheets
	  =====================================-->
	<link href="../Website_externo/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="../Website_externo/plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
	<link href="../Website_externo/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="../Website_externo/plugins/slick/slick.css" rel="stylesheet">
	<link href="../Website_externo/plugins/slick/slick-theme.css" rel="stylesheet">
	<link href="../Website_externo/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

	<link href="../Website_externo/css/style.css" rel="stylesheet">
	<link href="../Website_externo/css/ownStyles.css" rel="stylesheet">

	<link rel="stylesheet" href="../Website_externo/plugins/bootstrap/_offcanvas.scss">

</head>

<body class="body-wrapper">
	<?php

	mostrarHeaderCliente();

	?>

	<section class="page-search">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Advance Search -->
					<div class="advance-search nice-select-white">
						<form>
							<div class="form-row align-items-center">
								<div class="form-group col-xl-6 col-lg-6 col-md-6">
									<input type="text" class="form-control my-2 my-lg-0" id="inputtext4" placeholder="¿Qué quieres buscar?">
								</div>
								<div class="form-group col-xl-4 col-lg-4 col-md-6">
									<select class="w-100 form-control my-2 my-lg-0">
										<option>Categoría</option>
										<option value="1">Top rated</option>
										<option value="2">Lowest Price</option>
										<option value="4">Highest Price</option>
									</select>
								</div>

								<div class="form-group col-xl-2 col-lg-2 col-md-12">

									<button type="submit" class="btn btn-primary active w-100">Buscar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--===================================
	=            Store Section            =
	====================================-->
	<section class="bg-gray">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<!-- Left sidebar -->
				<?php

				$objContenidoCliente->showProducto($id_producto);

				?>

			</div>
		</div>
		<!-- Container End -->
	</section>

	<!-- Footer -->
	<?php
	mostrarFooterCliente();
	?>

	<!-- Essential Scripts
	=====================================-->
	<script src="../Website_externo/plugins/jquery/jquery.min.js"></script>
	<script src="../Website_externo/plugins/bootstrap/popper.min.js"></script>
	<script src="../Website_externo/plugins/bootstrap/bootstrap.min.js"></script>
	<script src="../Website_externo/plugins/bootstrap/bootstrap-slider.js"></script>
	<script src="../Website_externo/plugins/tether/js/tether.min.js"></script>
	<script src="../Website_externo/plugins/raty/jquery.raty-fa.js"></script>
	<script src="../Website_externo/plugins/slick/slick.min.js"></script>
	<script src="../Website_externo/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<!-- google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
	<script src="../Website_externo/plugins/google-map/map.js" defer></script>

	<script src="../Website_externo/js/script.js"></script>
</body>

</html>