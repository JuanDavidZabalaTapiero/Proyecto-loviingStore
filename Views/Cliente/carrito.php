<?php
session_start();

$id_cliente = $_SESSION["idUser"];

require_once('../../Controllers/Cliente/mostrarContenido.php');

require_once('../../Models/consultasAdmin.php');

require_once('../../Models/consultasCliente.php');

require_once(__DIR__ . '/../../Controllers/Cliente/contenidoCliente.php');
$objContenidoCliente = new ContenidoCliente();

// COMPRAR CARRITO CONTROLLER
require_once(__DIR__ . '/../../Controllers/Cliente/comprarCarritoController.php');
$objComprarCarritoController = new ComprarCarritoController();

// UPDATE CANTIDAD DEL ITEM EN EL CARRITO CONTROLLER
require_once(__DIR__ . '/../../Controllers/Cliente/updateCantidadItemController.php');
$objUpdateCantidadItemController = new UpdateCantidadItemController();

// DELTE ITEM DEL CARRITO CONTROLLER
require_once(__DIR__ . '/../../Controllers/Cliente/deleteItemCarritoController.php');
$objDeleteItemCarritoController = new DeleteItemCarritoController();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $form = $_POST["form"];

  if ($form == "comprar_carrito") {
    // $objComprarCarritoController->comprarCarrito($id_cliente);

    header('location: red.php');
  }

  if ($form == "cantidad_carrito") {
    $id_producto = $_POST["id_producto"];

    $cantidad = $_POST["cantidad"];

    $objUpdateCantidadItemController->updateCantidadItem($id_cliente, $id_producto, $cantidad);
  }

  if ($form == "delete_item") {
    $id_producto = $_POST["id_producto"];

    $objDeleteItemCarritoController->deleteItemCarrito($id_cliente, $id_producto);
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

  <!-- 
  Essential stylesheets
  =====================================-->
  <link href="../Website_externo/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="../Website_externo/plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
  <link href="../Website_externo/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../Website_externo/plugins/slick/slick.css" rel="stylesheet">
  <link href="../Website_externo/plugins/slick/slick-theme.css" rel="stylesheet">
  <link href="../Website_externo/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

  <link href="../Website_externo/css/style.css" rel="stylesheet">

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body class="body-wrapper">

  <?php
  mostrarHeaderCliente();
  ?>
  <!--==================================
  =            User Profile            =
  ===================================-->
  <section class="dashboard section">

    <!-- Container Start -->
    <div class="container">
      <!-- Row Start -->
      <div class="d-flex">

        <div class="w-100">
          <!-- Recently Favorited -->
          <div class="widget dashboard-container">
            <h1 class="text-center">Mi carrito</h1>
            <?php
            $objContenidoCliente->showCarrito($id_cliente);
            ?>
          </div>

        </div>
      </div>
      <!-- Row End -->
    </div>
    <!-- Container End -->
  </section>

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