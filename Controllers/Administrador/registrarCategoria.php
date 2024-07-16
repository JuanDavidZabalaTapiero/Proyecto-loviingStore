<?php
require_once('../../Models/consultasAdmin.php');

$nombreCat = $_POST["nombreCat"];

$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->registrarCategoria($nombreCat);