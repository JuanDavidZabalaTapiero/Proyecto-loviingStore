<?php
require_once ('../../Models/consultasAdmin.php');

$nombre_empresa = $_POST["nombre_empresa"];
$representante_ventas = $_POST["representante_ventas"];
$cod_producto = $_POST["cod_producto"];
$id_proveedor = $_POST["id_proveedor"];

$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->editarProveedor($nombre_empresa, $representante_ventas, $cod_producto, $id_proveedor);