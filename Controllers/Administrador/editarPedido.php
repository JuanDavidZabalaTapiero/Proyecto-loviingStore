<?php
require_once ('../../Models/consultasPedidos.php');

$id_pedido = $_POST["id_pedido"];
$nombre_cliente = $_POST["nombre_cliente"];
$fecha_Pedido = $_POST["Fecha_pedido"];
$total = $_POST["total_pedido"];
$metodoPago = $_POST["metodo_pago"];


$objConsultasPedidos = new ConsultasPedidos$objConsultasPedidos();

$move = $objConsultasPedidos->actualizarPedido($id_pedido,$nombre_cliente,$fecha_Pedido,$total,$metodoPago);
