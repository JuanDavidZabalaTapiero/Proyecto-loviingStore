<?php
require_once('../Models/validarSesion.php');

$emailUser = $_POST["emailUser"];
$claveUser = $_POST["claveUser"];

$claveHash = md5($claveUser);

$objValidarSesion = new ValidarSesion();

$move = $objValidarSesion->iniciarSesion($emailUser, $claveHash);