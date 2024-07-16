<?php
require_once ('../Models/conexionBd.php');
require_once('../Models/sendEmail.php');

$emailUser = $_POST["emailUser"];
$numIden = $_POST["numIden"];

$objGenerar = new GenerarClave();
$move = $objGenerar->enviarClave($emailUser, $numIden);