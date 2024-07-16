<?php
require_once ('../../Models/consultasAdmin.php');

$id_proveedor = $_GET["idProv"];

$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->eliminarProveedor($id_proveedor);
