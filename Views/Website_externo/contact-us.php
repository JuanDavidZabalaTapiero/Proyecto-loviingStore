<?php

require_once('../../Controllers/Cliente/mostrarContenido.php');

require_once(__DIR__ . '/../../Controllers/contactController.php');
$objContactController = new ContactController();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $form = $_POST["form"];

  if ($form == "form_message") {
    $nombre_user = $_POST["nombre_user"];

    $email_user = $_POST["email_user"];

    $asunto = $_POST["asunto"];

    $message = $_POST["message"];

    $objContactController->sendMessage($nombre_user, $email_user, $asunto, $message);

    // MENSAJE Y REDIRIGIR 
?>
    <script>
      alert("Mensaje Enviado");
      location.href = "../../index.php";
    </script>
<?php
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
  <title>Contáctanos | Loviing Store</title>

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
          <h3>Contácto</h3>
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
          <div class="contact-us-content p-4 text-center">
            <h1 class="pt-3">¿Tienes preguntas o sugerencias?</h1>
          </div>
        </div>
        <div class="col-md-6">
          <form action="" method="post">
            <input type="hidden" name="form" value="form_message">
            <fieldset class="p-4">
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-6 py-2">
                    <input type="text" placeholder="Nombre *" class="form-control" required name="nombre_user">
                  </div>
                  <div class="col-lg-6 pt-2">
                    <input type="email" placeholder="Email *" class="form-control" required name="email_user">
                  </div>
                </div>
              </div>
              <select name="asunto" id="" class="form-control w-100">
                <option>Seleccionar asunto del mensaje</option>
                <option value="Pregunta">Pregunta</option>
                <option value="Sugerencia">Sugerencia</option>
                <option value="Sobre un producto">Sobre un producto</option>
                <option value="Otro">Otro</option>
              </select>
              <textarea name="message" id="" placeholder="Mensaje *" class="border w-100 p-3 mt-3 mt-lg-4"></textarea>
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