<?php
session_start();

require_once('../../Controllers/Cliente/mostrarContenido.php');

require_once('../../Models/consultasAdmin.php');

require_once('../../Models/consultasCliente.php');

// EDITAR INFO DEL CLIENTE
require_once(__DIR__ . '/../../Controllers/Cliente/editarInfoCliente.php');
$objEditarInfoCliente = new EditarInfoCliente();

// VERIFICO SI SE ENVÍO UN FORM
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Obtén el valor del campo oculto 'form'
	$form = $_POST["form"];

	$num_documento = $_POST["num_documento"];

	// Verifica el tipo de formulario
	if ($form == 'personal-info-client') {
		// Procesa datos del formulario "personal-info-client"
		$nombre_cliente = $_POST["nombre_cliente"];
		$genero_cliente = $_POST["genero_cliente"];
		$fecha_nacimiento_cliente = $_POST["fecha_nacimiento_cliente"];
		$tipo_doc_cliente = $_POST["tipo_doc_cliente"];

		// Maneja el archivo subido (si hay)
		if (isset($_FILES['img_perfil_cliente']) && $_FILES['img_perfil_cliente']['error'] == UPLOAD_ERR_OK) {
			$fileTmpPath = $_FILES['img_perfil_cliente']['tmp_name'];
			$fileName = $_FILES['img_perfil_cliente']['name'];
			$uploadDir = __DIR__ . '/../../Uploads/Usuarios/';
			$uploadFilePath = $uploadDir . $fileName;
			if (move_uploaded_file($fileTmpPath, $uploadFilePath)) {
				$img_perfil_cliente = $fileName;
			} else {
				$img_perfil_cliente = null;
			}
		} else {
			$img_perfil_cliente = null;
		}

		// Llama a la función para actualizar la información
		$objEditarInfoCliente->editarInfoPersonal($num_documento, $nombre_cliente, $genero_cliente, $fecha_nacimiento_cliente, $tipo_doc_cliente, $img_perfil_cliente);
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
	<title>Classimax | Classified Marketplace Template</title>

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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="body-wrapper">
	<?php
	mostrarHeaderCliente();
	?>
	<!--==================================
	=            User Profile            =
	===================================-->

	<?php
	mostrarPerfilCliente();
	?>

	<!--============================
	=            Footer            =
	=============================-->

	<!-- Footer Bottom -->
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