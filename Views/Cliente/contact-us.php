<?php
session_start();

require_once ('../../Controllers/Cliente/mostrarContenido.php');

require_once ('../../Models/consultasAdmin.php');

require_once ('../../Models/consultasCliente.php');
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

</head>

<body class="body-wrapper">

  <?php

  mostrarHeaderCliente();

  ?>

  <!-- page title -->
  <!--================================
  =            Page Title            =
  =================================-->
  <section class="page-title">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
          <!-- Title text -->
          <h3>Contáctanos 📱📧</h3>
        </div>
      </div>
    </div>
    <!-- Container End -->
  </section>
  <!-- page title -->

  <!-- contact us start-->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="contact-us-content p-4">
            <h2 class="pt-3">¡Ponte en Contacto con Nosotros!</h2>
            <p class="pt-3 fs-1">Si tienes alguna pregunta, sugerencia o simplemente deseas obtener más información sobre nuestros servicios, no dudes en comunicarte con nosotros. Puedes enviarnos un mensaje a través del formulario, llamarnos o visitarnos en nuestras oficinas.</>
          </div>
        </div>
        <div class="col-md-6">
          <form action="#">
            <fieldset class="p-4">
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-6 py-2">
                    <input type="text" placeholder="Name *" class="form-control" required>
                  </div>
                  <div class="col-lg-6 pt-2">
                    <input type="email" placeholder="Email *" class="form-control" required>
                  </div>
                </div>
              </div>
              <select name="" id="" class="form-control w-100">
                <option value="Select">Category</option>
                <option value="1">Laptop</option>
                <option value="1">iPhone</option>
                <option value="1">Monitor</option>
                <option value="1">I need</option>
              </select>
              <textarea name="message" id="" placeholder="Message *" class="border w-100 p-3 mt-3 mt-lg-4"></textarea>
              <div class="btn-grounp">
                <button type="submit" class="btn btn-primary mt-2 float-right">SUBMIT</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- contact us end -->

  <!--============================
  =            Footer            =
  =============================-->

  <footer class="footer section section-sm">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0 mb-4 mb-lg-0">
          <!-- About -->ue="1">
          <div class="block about">
            <!-- footer logo -->
            <img src="images/logo-footer.png" alt="logo">
            <!-- description -->
            <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <!-- Link list -->
        <div class="col-lg-2 offset-lg-1 col-md-3 col-6 mb-4 mb-lg-0">
          <div class="block">
            <h4>Site Pages</h4>
            <ul>
              <li><a href="dashboard-my-ads.html">My Ads</a></li>
              <li><a href="dashboard-favourite-ads.html">Favourite Ads</a></li>
              <li><a href="dashboard-archived-ads.html">Archived Ads</a></li>
              <li><a href="dashboard-pending-ads.html">Pending Ads</a></li>
              <li><a href="terms-condition.html">Terms & Conditions</a></li>
            </ul>
          </div>
        </div>
        <!-- Link list -->
        <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0 col-6 mb-4 mb-md-0">
          <div class="block">
            <h4>Admin Pages</h4>
            <ul>
              <li><a href="category.html">Category</a></li>
              <li><a href="single.html">Single Page</a></li>
              <li><a href="store.html">Store Single</a></li>
              <li><a href="single-blog.html">Single Post</a>
              </li>
              <li><a href="blog.html">Blog</a></li>



            </ul>
          </div>
        </div>
        <!-- Promotion -->
        <div class="col-lg-4 col-md-7">
          <!-- App promotion -->
          <div class="block-2 app-promotion">
            <div class="mobile d-flex  align-items-center">
              <a href="index.html">
                <!-- Icon -->
                <img src="images/footer/phone-icon.png" alt="mobile-icon">
              </a>
              <p class="mb-0">Get the Dealsy Mobile App and Save more</p>
            </div>
            <div class="download-btn d-flex my-3">
              <a href="index.html"><img src="images/apps/google-play-store.png" class="img-fluid" alt=""></a>
              <a href="index.html" class=" ml-3"><img src="images/apps/apple-app-store.png" class="img-fluid"
                  alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container End -->
  </footer>
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