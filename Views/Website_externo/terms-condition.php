<?php
require_once ('../../Controllers/Cliente/mostrarContenido.php');
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

</head>

<body class="body-wrapper">


  <?php

  mostrarHeader();

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
          <h3>Términos y Condiciones</h3>
        </div>
      </div>
    </div>
    <!-- Container End -->
  </section>

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto p-0">
          <div class="terms-condition-content">
            <h3 class="py-3">Aceptación de los términos y condiciones</h3>
            <p>1.1. Al acceder y utilizar la tienda virtual de Loviing Store, aceptas los siguientes términos y
              condiciones en su totalidad. Si no estás de acuerdo con alguno de estos términos, te recomendamos no
              utilizar el sitio.</p>
            <p>1.2. Nos reservamos el derecho de modificar o actualizar estos términos y condiciones en cualquier
              momento sin previo aviso. Es tu responsabilidad revisarlos periódicamente para estar al tanto de los
              cambios.</p>

            <h3 class="py-3">Información de la tienda</h3>
            <p>2.1. La tienda virtual Loviing Store es propiedad y está operada por si misma.</p>
            <p>2.2. La información de los productos, incluyendo precios, descripciones y disponibilidad, está sujeta a
              cambios sin previo aviso.</p>

            <h3 class="py-3">Registro de cuenta</h3>
            <p>3.1. Para realizar compras en Loviing Store, puedes registrarte y crear una cuenta. Debes proporcionar
              información precisa y actualizada durante el proceso de registro.</p>
            <p>3.2. Eres responsable de mantener la confidencialidad de tu información de inicio de sesión y de todas
              las actividades que ocurran en tu cuenta.</p>

            <h3 class="py-3">Precios y pagos</h3>
            <p>4.1. Los precios de los productos en Loviing Store están expresados en la moneda local y no incluyen
              impuestos ni costos de envío, a menos que se indique lo contrario.</p>
            <p>4.2. Aceptamos diferentes métodos de pago que se muestran durante el proceso de compra. Todos los pagos
              deben ser realizados de manera segura y cumplir con las regulaciones aplicables.</p>

            <h3 class="py-3">Envíos y entregas</h3>
            <p>5.1. Realizamos envíos a direcciones dentro del área de cobertura especificada en nuestro sitio web.</p>
            <p>5.2. El tiempo estimado de entrega puede variar según la ubicación y otros factores externos. No nos
              hacemos responsables de los retrasos causados por terceros o situaciones imprevistas.</p>

            <h3 class="py-3">Propiedad intelectual</h3>
            <p>6.1. Todos los contenidos presentes en la tienda virtual Loviing Store, incluyendo imágenes, logotipos y
              textos, están protegidos por derechos de autor y son propiedad exclusiva de la empresa misma. No se
              permite su reproducción o uso no autorizado.</p>

            <h3 class="py-3">Registro de cuenta</h3>
            <p>7.1. Loviing Store no se hace responsable de cualquier daño directo, indirecto, incidental o consecuente
              que pueda surgir del uso de nuestros productos o del acceso a nuestro sitio web.</p>
            <p>7.2. Nuestra responsabilidad se limita al precio pagado por el producto o servicio en cuestión.</p>
          </div>
        </div>
      </div>
  </section>

  <!--============================
  =            Footer            =
  =============================-->

  <!-- Footer Bottom -->
  <footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright &copy;
              <script>
                var CurrentYear = new Date().getFullYear()
                document.write(CurrentYear)
              </script>
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <!-- Social Icons -->
          <ul class="social-media-icons text-center text-lg-right">
            <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher"></a></li>
            <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher"></a></li>
            <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher"></a></li>
            <li><a class="fa fa-github-alt" href="https://www.github.com/themefisher"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="scroll-top-to">
      <i class="fa fa-angle-up"></i>
    </div>
  </footer>

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