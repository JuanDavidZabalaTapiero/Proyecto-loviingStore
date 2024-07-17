<?php

require_once ('../../Controllers/Administrador/seguridadAcceso.php');
require_once ('../../Controllers/Administrador/mostrarInfoUser.php');
require_once (__DIR__ . '/../../Controllers/Administrador/mostrarInfoPedidos.php'); // Ajusta la ruta aquí

$id_pedido = $_GET["id_pedido"];

// formularioEditarPedidos($id_pedido);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home de Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../Dashboard/assets/img/favicon.png" rel="icon">
  <link href="../Dashboard/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../Dashboard/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Dashboard/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../Dashboard/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../Dashboard/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../Dashboard/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../Dashboard/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../Dashboard/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link
    href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.0.3/b-3.0.1/b-html5-3.0.1/b-print-3.0.1/datatables.min.css"
    rel="stylesheet">
  <link href="../Dashboard/assets/css/style.css" rel="stylesheet">
  <link href="../Dashboard/assets/css/styleformularios.css" rel="stylesheet">
  <link href="../Dashboard/assets/css/styleRegistros.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php
  cargarHeaderAdmin();
  ?><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php
  cargarMenuAdmin();
  ?>
  <!-- End Sidebar-->


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Editar Pedidos</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item active">Registrar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="card">
        <div class="card-body">
          <?php
          // Asegúrate de que el id_pedido está siendo pasado correctamente
          if (isset($_GET["id_pedido"])) {
              $id_pedido = $_GET["id_pedido"];
              formularioEditarPedidos($id_pedido);
          } else {
              echo "ID de pedido no proporcionado.";
          }
          ?>
        </div>
      </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  cargarFooterAdmin();
  ?>

  <!-- Vendor JS Files -->
  <script src="../Dashboard/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../Dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../Dashboard/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../Dashboard/assets/vendor/echarts/echarts.min.js"></script>
  <script src="../Dashboard/assets/vendor/quill/quill.js"></script>
  <script src="../Dashboard/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../Dashboard/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../Dashboard/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../Dashboard/assets/js/main.js"></script>

</body>

</html>

<?php
function formularioEditarPedidos($id_pedido)
{
  $objPrepararConsulta = new ConsultasPedidos(new PrepararConsulta());

  $tablaPedido = $objPrepararConsulta->consultarPedidoPorId($id_pedido);

  if ($tablaPedido) {
    echo '
      <form action="../../Controllers/Administrador/editarPedido.php" class="form" method="post" enctype="multipart/form-data">
        <div class="row g-3 formulario">
          <div class="col-md-12">
            <label for="id_pedido">ID pedido</label> <br>
            <input type="text" id="id_pedido" name="id_pedido" class="input" value="' . $tablaPedido["id_pedido"] . '" required readonly> 
          </div>
          <div class="col-md-6">
            <label for="nombre_cliente">Nombre Cliente</label> <br>
            <input type="text" id="nombre_cliente" name="nombre_cliente" class="input" value="' . $tablaPedido["nombre_cliente"] . '" required>
          </div>
          <div class="col-md-6">
            <label for="Fecha_pedido">Fecha</label> <br>
            <input type="date" id="Fecha_pedido" name="Fecha_pedido" class="input" value="' . $tablaPedido["fecha_pedido"] . '" required><br>
          </div>
          <div class="col-md-12">
            <label for="total_pedido">Total</label> <br>
            <input type="number" id="total_pedido" name="total_pedido" class="input" value="' . $tablaPedido["total"] . '" required><br>               
          </div>
          <div class="col-md-12">
            <label for="metodo_pago">Metodo de pago</label> <br>
            <input type="text" id="metodo_pago" name="metodo_pago" class="input" value="' . $tablaPedido["metodo_pago"] . '" required><br>               
          </div>
          <div class="text-center">
            <button type="submit" class="form-button">Envíar</button>
          </div>
        </div>
      </form>';
  } else {
    echo "No se encontró el pedido.";
  }
}
?>
