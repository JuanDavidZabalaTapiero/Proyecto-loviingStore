<?php

require_once (__DIR__ . '/../../Models/consultasPedidos.php');

$objConsultasPedidos = new ConsultasPedidos();

$id_pedido = $_GET["id_pedido"];

$move = $objConsultasPedidos->deletePedido($id_pedido);