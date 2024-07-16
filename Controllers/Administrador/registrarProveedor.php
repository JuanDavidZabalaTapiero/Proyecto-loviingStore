<?php
require_once('../../Models/consultasAdmin.php');

$nombre_empresa = $_POST["nombreEmp"];

$representante_ventas = $_POST["nombre_representante"];

$cod_producto = $_POST["prodProv"];

$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->registrarProveedor($nombre_empresa, $representante_ventas, $cod_producto);