<?php
require_once ('../../Models/consultasPedidos.php');

$id_pedido = $_POST["id_pedido"];
$nombre_usuario = $_POST["nombre_usuario"];
$fecha_Pedido = $_POST["Fecha_pedido"];
$total = $_POST["total_pedido"];
$metodoPago = $_POST["metodo_pago"];


$objConsultasPedidos = new ConsultasPedidos();

$move = $objConsultasPedidos->actualizarPedido($id_pedido,$nombre_usuario,$fecha_Pedido,$total,$metodoPago);
