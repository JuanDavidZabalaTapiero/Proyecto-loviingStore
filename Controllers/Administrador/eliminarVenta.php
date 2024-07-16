<?php
require_once ('../../Models/consultasAdmin.php');

$id_venta = $_GET["idVent"];

$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->eliminarVenta($id_venta);
