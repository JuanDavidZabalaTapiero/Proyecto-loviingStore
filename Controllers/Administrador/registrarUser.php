<?php
require_once('../../Models/consultasAdmin.php');

$nombreUser = $_POST["nombreUser"];
$generoUser = $_POST["generoUser"];
$fechaNacUser = $_POST["fechaNacUser"];
$tipoDocUser = $_POST["tipoDocUser"];
$numDocUser = $_POST["numDocUser"];
$emailUser = $_POST["emailUser"];
$rolUser = $_POST["rolUser"];
$estadoUser = $_POST["estadoUser"];

$rutaFoto = "../../Uploads/Usuarios/".$_FILES["fotoUser"]["name"];

$moveFoto = move_uploaded_file($_FILES["fotoUser"]["tmp_name"], $rutaFoto);

$claveHash = md5($numDocUser);

$fechaUser = date("Y-m-d");

$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->registrarUser($nombreUser, $generoUser, $fechaNacUser, $tipoDocUser, $numDocUser, $claveHash, $emailUser, $rolUser, $estadoUser, $rutaFoto, $fechaUser);