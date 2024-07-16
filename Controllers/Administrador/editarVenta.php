<?php
require_once ('../../Models/consultasAdmin.php');

$cod_producto = $_POST["cod_producto"];
$cod_cliente = $_POST["cod_cliente"];
$cantidad = $_POST["cantidad"];

$fecha_venta = $_POST["fecha_venta"];

$total = $_POST["total"];
$cod_metodo_pago = $_POST["cod_metodo_pago"];
$estado = $_POST["estado"];
$id_venta = $_POST["id_venta"];

$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->editarVenta($cod_producto, $cod_cliente, $cantidad, $fecha_venta, $total, $cod_metodo_pago, $estado, $id_venta);