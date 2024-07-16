<?php
require_once ('../../Models/consultasAdmin.php');

$id_producto = $_GET["idProd"];

$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->eliminarProducto($id_producto);
