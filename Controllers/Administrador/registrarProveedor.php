<?php
require_once('../../Models/consultasAdmin.php');

$nombre_empresa = $_POST["nombreEmp"];

$representante_ventas = $_POST["nombre_representante"];

$cod_producto = $_POST["cod_producto"];

$direccion_proveedor = $_POST["direccionFisica"];

$correo_proveedor = $_POST["emailProveedor"];

$tel_proveedor = $_POST["telProveedor"];

$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->registrarProveedor($nombre_empresa, $representante_ventas, $cod_producto, $direccion_proveedor, $correo_proveedor, $tel_proveedor);
