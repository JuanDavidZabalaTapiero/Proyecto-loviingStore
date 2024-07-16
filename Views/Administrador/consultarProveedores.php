<?php

require_once ('../../Controllers/Administrador/seguridadAcceso.php');

require_once ('../../Controllers/Administrador/mostrarInfoUser.php');

require_once ('../../Controllers/Administrador/tablaProveedores.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tabla de Proveedores</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../Dashboard/assets/img/favicon.png" rel="icon">
  <link href="../Dashboard/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
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
      <h1>Proveedores</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item active">Consultar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card tabla-consultar">
            <div class="card-body tabla-consultar">
              <h5 class="card-title">Gestión de Proveedores</h5>
              <table id="TableSynchronize" class="table datatable">
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>Empresa</th>
                      <th>Representante de ventas</th>
                      <th>Producto</th>
                      <th>Correo Electronico</th>
                      <th>Telefono</th>
                      <th>Dirección</th>
                      
                      <th>Ver</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                    </tr>
                  </thead>
                <tbody>
                  <?php
                  tablaProveedores();
                  ?>
                </tbody>
              </table>

              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  cargarFooterAdmin();
  ?>

    <!-- Vendor JS Files -->
    <script
      src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.0.3/b-3.0.1/b-html5-3.0.1/b-print-3.0.1/datatables.min.js"></script>

    <script src="../Dashboard/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../Dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../Dashboard/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../Dashboard/assets/vendor/echarts/echarts.min.js"></script>
    <script src="../Dashboard/assets/vendor/quill/quill.min.js"></script>
    <script src="../Dashboard/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../Dashboard/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../Dashboard/assets/vendor/php-email-form/validate.js"></script>

<!-- Generacion de informes -->
    <!-- <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script> -->
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>


    <script>
    $(document).ready(function () {
    $('#TableSynchronize').DataTable({
    dom: 'Btip',
    buttons: [
      {
        extend: 'pdf',
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6] // Especifica las columnas que deseas incluir en el PDF
        },
        customize: function (doc) {
          // Personalización del documento PDF
          doc.content.splice(0, 1, {
            text: 'Informe de Proveedores', // Cambia el título del documento PDF
            style: 'title'
          });
          
          // Agregar contenido original de la tabla después del título
          var dataTableContent = {
            table: {
              headerRows: 1,
              body: []
            },
            layout: 'lightHorizontalLines'
          };

          var tableRows = $('#TableSynchronize').DataTable().rows().data();
          tableRows.each(function (index, rowData) {
            var dataRow = [];
            $(rowData).each(function () {
              dataRow.push({ text: this });
            });
            dataTableContent.table.body.push(dataRow);
          });

          doc.content.push(dataTableContent);

          // Puedes realizar otras personalizaciones aquí si es necesario
        }
      },
      {
        extend: 'excel',
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6] // Especifica las columnas que deseas incluir en el PDF
        }
      },

      {
        extend: 'print',
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6] // Especifica las columnas que deseas incluir en el PDF
        }
      },

      {
        extend: 'copy',
        exportOptions: {
          columns: [0, 1, 2, 3, 4, 5, 6] // Especifica las columnas que deseas incluir en el PDF
        }
      }
    ],
    lengthMenu: [[5, 25, 50, -1], [5, 25, 50, "Todo"]],
    pageLength: 10,
    dom: '<"top"fBlS>rt<"bottom"ip>',
    language: {
      lengthMenu: 'Mostrar _MENU_ registros',
      search: 'Buscar:',
      info: 'Mostrando _START_ a _END_ de _TOTAL_ entradas',
    }
    }).buttons().container().appendTo('#TableSynchronize_wrapper .col-md-6:eq(0)');
  });
    </script>

    <!-- Biblioteca jsPDF -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.15/jspdf.plugin.autotable.min.js"></script> -->

    <!-- Biblioteca SheetJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.3/xlsx.full.min.js"></script>

</body>

</html>