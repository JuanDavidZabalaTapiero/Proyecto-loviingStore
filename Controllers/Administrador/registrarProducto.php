<?php

require_once('../../Models/consultasAdmin.php');

$codCat = $_POST["catProd"];
$nombre = $_POST["nombreProd"];
$desc = $_POST["descProd"];
$precio = $_POST["precioProd"];
$entradas = $_POST["entradasProd"];
$salidas = $_POST["salidasProd"];
$stock = $_POST["stockProd"];

$fecha = date("Y-m-d");

$rutaFoto1 = "../../Uploads/Productos/".$_FILES["foto1_producto"]["name"];

$moveFoto = move_uploaded_file($_FILES["foto1_producto"]["tmp_name"], $rutaFoto1);

$foto1_producto = $_FILES["foto1_producto"]["name"];

$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->registrarProducto($codCat, $nombre, $desc, $precio, $entradas, $salidas, $stock, $fecha, $foto1_producto);