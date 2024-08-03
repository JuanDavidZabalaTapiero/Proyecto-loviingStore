<?php
require_once('../../Models/consultasAdmin.php');

$nombreCat = $_POST["nombreCat"];

// MOVER LA FOTO DE LA CATEGORÍA
$rutaImgCat = "../../Uploads/Categorias/" . $_FILES["img_cat"]["name"];
$moveFoto = move_uploaded_file($_FILES["img_cat"]["tmp_name"], $rutaImgCat);

$nombreImg = $_FILES["img_cat"]["name"];

$objConsultasAdmin = new ConsultasAdmin();

$move = $objConsultasAdmin->registrarCategoria($nombreCat, $nombreImg);