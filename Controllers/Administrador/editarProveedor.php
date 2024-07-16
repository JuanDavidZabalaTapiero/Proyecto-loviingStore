<?php
require_once ('../../Models/consultasAdmin.php');

$nombre_empresa = $_POST["nombre_empresa"];

$representante_ventas = $_POST["representante_ventas"];

$cod_producto = $_POST["cod_producto"];

$id_proveedor = $_POST["id_proveedor"];

$direccion_proveedor = $_POST["direccionFisica"];

$correo_proveedor = $_POST["emailProveedor"];

$tel_proveedor = $_POST["telProveedor"];

$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->editarProveedor($nombre_empresa, $representante_ventas, $cod_producto, $direccion_proveedor, $correo_proveedor, $tel_proveedor, $id_proveedor);