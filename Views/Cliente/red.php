<?php

// Incluye el archivo autoload.php de Composer
require_once '../../vendor/autoload.php';

// Importa las clases necesarias de Mercado Pago
use MercadoPago\Item;
use MercadoPago\Preference;
use MercadoPago\SDK;

// Configura las credenciales de Mercado Pago
$accessToken = 'APP_USR-8543875739637653-071419-5cf672767f245a5f1a8d7017618106dc-1899665503'; // Reemplaza con tu access token
SDK::setAccessToken($accessToken);

// Crea un nuevo ítem (producto a comprar)
$item = new Item();
$item->id = 'PRODUCTO_ID'; // Reemplaza con el ID del producto
$item->title = 'Nombre del Producto'; // Reemplaza con el nombre del producto
$item->quantity = 1;
$item->unit_price = 100.0;  // Precio del producto

// Crea una preferencia de pago
$preference = new Preference();
$preference->items = [$item];

// Guarda la preferencia
$preference->save();

// Redirecciona al usuario a payment.php pasando el preference_id
header('Location: btnPagar.php?preference_id=' . $preference->id);
exit;
?>
