<?php

require_once ('../../Models/consultasAdmin.php');

$codCat = $_POST["catProd"];
$nombre = $_POST["nombreProd"];
$desc = $_POST["descProd"];
$precio = $_POST["precioProd"];
$stock = $_POST["stockProd"];

$fecha = date("Y-m-d");

$rutaFoto1 = "../../Uploads/Productos/" . $_FILES["foto1_producto"]["name"];
$moveFoto = move_uploaded_file($_FILES["foto1_producto"]["tmp_name"], $rutaFoto1);
$foto1_producto = $_FILES["foto1_producto"]["name"];

$rutaFoto2 = "../../Uploads/Productos/" . $_FILES["foto2_producto"]["name"];
$moveFoto = move_uploaded_file($_FILES["foto2_producto"]["tmp_name"], $rutaFoto2);
$foto2_producto = $_FILES["foto2_producto"]["name"];

$rutaFoto3 = "../../Uploads/Productos/" . $_FILES["foto3_producto"]["name"];
$moveFoto = move_uploaded_file($_FILES["foto3_producto"]["tmp_name"], $rutaFoto3);
$foto3_producto = $_FILES["foto3_producto"]["name"];

$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->registrarProducto($codCat, $nombre, $desc, $precio, $stock, $fecha, $foto1_producto, $foto2_producto, $foto3_producto);