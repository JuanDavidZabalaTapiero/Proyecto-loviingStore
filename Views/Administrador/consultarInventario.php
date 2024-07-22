<?php

require_once ('../../Controllers/Administrador/seguridadAcceso.php');

require_once ('../../Controllers/Administrador/mostrarInfoUser.php');

require_once (__DIR__ . '/../../Controllers/Administrador/contenidoAdmin.php');
$objContenidoAdmin = new ContenidoAdmin();

require_once (__DIR__ . '/../../Controllers/Administrador/tblInventarioController.php');
$objTblInventarioController = new TblInventarioController();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tabla de Categorias</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php
    $objContenidoAdmin->showLinks();
    ?>
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
            <h1>Inventario</h1>
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
                            <h5 class="card-title">Gestión de Inventario</h5>
                            <table id="TableSynchronize" class="table datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Producto</th>
                                        <th>Entradas</th>
                                        <th>Salidas</th>
                                        <th>Stock</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $objTblInventarioController->showTblInventario();
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

    <?php
    $objContenidoAdmin->showScripts();
    ?>

    <script>
        $(document).ready(function () {
            $('#TableSynchronize').DataTable({
                dom: 'Btip',
                buttons: [
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: [0, 1] // Especifica las columnas que deseas incluir en el PDF
                        },
                        customize: function (doc) {
                            // Personalización del documento PDF
                            doc.content.splice(0, 1, {
                                text: 'Informe de Categorias', // Cambia el título del documento PDF
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
                            columns: [0, 1] // Especifica las columnas que deseas incluir en el PDF
                        }
                    },

                    {
                        extend: 'print',
                        exportOptions: {
                            columns: [0, 1] // Especifica las columnas que deseas incluir en el PDF
                        }
                    },
                    {
                        extend: 'copy',
                        exportOptions: {
                            columns: [0, 1] // Especifica las columnas que deseas incluir en el PDF
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

</body>

</html>