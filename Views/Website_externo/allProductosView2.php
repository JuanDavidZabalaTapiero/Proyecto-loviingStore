<?php

require_once('../../Controllers/Cliente/mostrarContenido.php');

require_once('../../Controllers/Cliente/mostrarInfoProducto.php');

require_once('../../Models/consultasAdmin.php');

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

  <!-- favicon -->
  <link href="images/favicon.png" rel="shortcut icon">

  <!-- Essential stylesheets
  =====================================-->
  <link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="plugins/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick/slick-theme.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="body-wrapper">

  <?php

  mostrarHeader();

  ?>
  <section class="section-sm">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="category-search-filter">
            <div class="row">
              <div class="col-md-12 text-center text-md-right mt-2 mt-md-0">
                <div class="view">
                  <strong>Vista</strong>
                  <ul class="list-inline view-switcher">
                    <li class="list-inline-item">
                      <a href="allProductos.php"><i class="fa fa-th-large"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="allProductosView2.php" class="text-info"><i class="fa fa-reorder"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- ad listing list  -->
          <?php

          mostrarProductosLista();

          ?>

          <!-- pagination -->
          <div class="pagination justify-content-center py-4">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="allProductosView2.php" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active"><a class="page-link" href="allProductosView2.php">1</a></li>
                <li class="page-item"><a class="page-link" href="allProductosView2.php">2</a></li>
                <li class="page-item"><a class="page-link" href="allProductosView2.php">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="allProductosView2.php" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- pagination -->
        </div>
      </div>
    </div>
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
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/popper.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <script src="plugins/bootstrap/bootstrap-slider.js"></script>
  <script src="plugins/tether/js/tether.min.js"></script>
  <script src="plugins/raty/jquery.raty-fa.js"></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <script src="plugins/google-map/map.js" defer></script>

  <script src="js/script.js"></script>

</body>

</html>