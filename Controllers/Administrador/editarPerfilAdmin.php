<?php

require_once ('../../Models/consultasAdmin.php');

$nombre_usuario = $_POST["nombre_usuario"];
$genero = $_POST["genero"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$tipo_documento = $_POST["tipo_documento"];
$num_documento = $_POST["num_documento"];
$email_usuario = $_POST["email_usuario"];

$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->editarPerfilAdmin($nombre_usuario, $genero, $fecha_nacimiento, $tipo_documento, $num_documento, $email_usuario);