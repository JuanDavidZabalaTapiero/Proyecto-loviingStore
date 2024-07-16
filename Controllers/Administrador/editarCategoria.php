<?php
require_once ('../../Models/consultasAdmin.php');

$nombreCat = $_POST["nombreCat"];
$idCat = $_POST["idCat"];

$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->editarCategoria($nombreCat, $idCat);