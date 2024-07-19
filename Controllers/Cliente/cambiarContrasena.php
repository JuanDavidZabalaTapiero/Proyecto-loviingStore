<?php

require_once("../../Models/sendEmail.php");

$numDoc = $_GET['numDoc'];
$contrasenaActual = $_GET['contrasenaActual'];
$contrasenaNueva = $_GET['contrasenaNueva'];
$contrasenaNuevaVerificar = $_GET['contrasenaNuevaVerificar'];


$claveActualHash = md5($contrasenaActual);

$claveNuevaHash = md5($contrasenaNueva);

$claveNuevaVerificarHash = md5($contrasenaNuevaVerificar);

$objCambiarContrasena = new GenerarClave();

$move = $objCambiarContrasena->cambiarClave($numDoc, $claveActualHash, $claveNuevaHash, $claveNuevaVerificarHash);



?>