<?php

class ContenidoAdmin
{
    public function showLinks()
    {
        ?>
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
        <?php
    }

    public function showScripts()
    {
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

        <!-- Biblioteca jsPDF -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.15/jspdf.plugin.autotable.min.js"></script> -->

        <!-- Biblioteca SheetJS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.3/xlsx.full.min.js"></script>
        <?php
    }
}