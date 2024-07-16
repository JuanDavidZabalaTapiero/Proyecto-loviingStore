<?php
require_once ('../../Models/consultasAdmin.php');

$nombreUser = $_POST["nombreUser"];
$generoUser = $_POST["generoUser"];
$fechaNacUser = $_POST["fechaNacUser"];
$tipoDocUser = $_POST["tipoDocUser"];
$numDocUser = $_POST["numDocUser"];
$emailUser = $_POST["emailUser"];
$rolUser = $_POST["rolUser"];
$estadoUser = $_POST["estadoUser"];

$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->editarUser($nombreUser, $generoUser, $fechaNacUser, $tipoDocUser, $numDocUser, $emailUser, $rolUser, $estadoUser);