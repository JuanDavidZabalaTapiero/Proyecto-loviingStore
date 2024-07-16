<?php
require_once ('../../Models/consultasAdmin.php');

$id_producto = $_POST["idProd"];
$cod_categoria = $_POST["catProd"];
$nombre_producto = $_POST["nombreProd"];
$descripcion_producto = $_POST["descProd"];
$precio_producto = $_POST["precioProd"];
$entradas = $_POST["entradasProd"];
$salidas = $_POST["salidasProd"];
$stock = $_POST["stockProd"];


$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->editarProducto($id_producto, $cod_categoria, $nombre_producto, $descripcion_producto, $precio_producto, $entradas, $salidas, $stock);