<?php
require_once(__DIR__ . '/../../Models/consultasPedidos.php');

$cod_cliente = $_POST["cliente"];

$fecha_pedido = $_POST["Fecha_pedido"];
$total = $_POST["total_pedido"];
$cod_metodo_pago = $_POST["metodo_pago"];

$objConsultasPedidos = new ConsultasPedidos();
$move = $objConsultasPedidos->insertPedido($cod_cliente, $fecha_pedido, $total, $cod_metodo_pago);