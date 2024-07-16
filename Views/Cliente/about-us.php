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
  <title>Loviing Store | Sobre Nosotros</title>

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

  <!--================================
  =            Page Title            =
  =================================-->
  <section class="page-title">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
          <!-- Title text -->
          <h3>Sobre Nosotros</h3>
        </div>
      </div>
    </div>
    <!-- Container End -->
  </section>

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="about-img">
            <img src="../Website_externo/images/about/about.jpg" class="img-fluid w-100 rounded" alt="">
          </div>
        </div>
        <div class="col-lg-6 pt-5 pt-lg-0">
          <div class="about-content">
            <h3 class="font-weight-bold">Introducción</h3>
            <p>Nuestra plataforma está diseñada pensando en ti, proporcionando una experiencia de compra sin
              complicaciones y al alcance de tu mano.</p>
            <h3 class="font-weight-bold">Nuestro Objetivo</h3>
            <p>Nuestro objetivo principal es hacer que las compras sean fáciles y agradables para todos. Nos esforzamos
              por proporcionar productos de alta calidad a precios competitivos, asegurando que obtengas el mejor valor
              por tu dinero. Estamos comprometidos a ofrecer un excelente servicio al cliente y a garantizar que tu
              experiencia de compra con nosotros sea excepcional.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="heading text-center text-capitalize font-weight-bold py-5">
            <h2>Nuestro Equipo</h2>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card my-3 my-lg-0">
            <img class="card-img-top" src="../Website_externo/images/team/team1.jpg" class="img-fluid w-100"
              alt="Card image cap">
            <div class="card-body bg-gray text-center">
              <h5 class="card-title">Jean Carlos Velandia</h5>
              <p class="card-text">Founder / CEO</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card my-3 my-lg-0">
            <img class="card-img-top" src="../Website_externo/images/team/team2.jpg" class="img-fluid w-100"
              alt="Card image cap">
            <div class="card-body bg-gray text-center">
              <h5 class="card-title">Juan David Zabala</h5>
              <p class="card-text">Founder / CEO</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card my-3 my-lg-0">
            <img class="card-img-top" src="../Website_externo/images/team/team3.jpg" class="img-fluid w-100"
              alt="Card image cap">
            <div class="card-body bg-gray text-center">
              <h5 class="card-title">Michael Bastidas</h5>
              <p class="card-text">Founder / CEO</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card my-3 my-lg-0">
            <img class="card-img-top" src="../Website_externo/images/team/team4.jpg" class="img-fluid w-100"
              alt="Card image cap">
            <div class="card-body bg-gray text-center">
              <h5 class="card-title">Joseph Vargas</h5>
              <p class="card-text">Founder / CEO</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
          <div class="counter-content text-center bg-light py-4 rounded">
            <i class="fa fa-smile-o d-block"></i>
            <span class="counter my-2 d-block" data-count="2314">0</span>
            <h5>Happy Customers</h5>
            </script>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
          <div class="counter-content text-center bg-light py-4 rounded">
            <i class="fa fa-user-o d-block"></i>
            <span class="counter my-2 d-block" data-count="1013">0</span>
            <h5>Active Members</h5>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
          <div class="counter-content text-center bg-light py-4 rounded">
            <i class="fa fa-bookmark-o d-block"></i>
            <span class="counter my-2 d-block" data-count="2413">0</span>
            <h5>Verified Ads</h5>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
          <div class="counter-content text-center bg-light py-4 rounded">
            <i class="fa fa-smile-o d-block"></i>
            <span class="counter my-2 d-block" data-count="200">0</span>
            <h5>Happy Customers</h5>
          </div>
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