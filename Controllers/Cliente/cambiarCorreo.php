<?php

require_once("../../Models/sendEmail.php");

$numDoc = $_GET['numDoc'];
$correoActual = $_GET['correoActual'];
$correoNuevo = $_GET['correoNuevo'];

$objCambiarCorreo = new GenerarClave();

$actualizar = $objCambiarCorreo->cambiarCorreo($numDoc, $correoActual, $correoNuevo);

?>