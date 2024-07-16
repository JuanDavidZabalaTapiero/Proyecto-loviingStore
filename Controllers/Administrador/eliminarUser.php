<?php
require_once ('../../Models/consultasAdmin.php');

$idUser = $_GET["idUser"];

$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->eliminarUser($idUser);
