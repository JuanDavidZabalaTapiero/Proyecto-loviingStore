<?php
require_once ('../../Models/consultasAdmin.php');

$idCat = $_GET["idCat"];

$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->eliminarCategoria($idCat);
