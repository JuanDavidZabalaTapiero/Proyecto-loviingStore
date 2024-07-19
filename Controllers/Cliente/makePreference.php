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

// PARA LAS CONSULTAS DE PRODUCTOS
require_once(__DIR__ . '/../../Models/consultasProductos.php');

// PARA CONSULTAR ITEMS DEL CARRITO
require_once(__DIR__ . '/../../Models/consultasItemsCarrito.php');

// PARA CONSULTAS DEL CARRITO
require_once(__DIR__ . '/../../Models/consultasCarrito.php');

class CreatePreferenceMercadoPago
{
    public $objConsultasProductos;

    public $objConsultasItemsCarrito;

    public $objConsultasCarrito;

    public function __construct()
    {
        $this->objConsultasProductos = new ConsultasProductos();

        $this->objConsultasItemsCarrito = new ConsultasItemsCarrito();

        $this->objConsultasCarrito = new ConsultasCarrito();
    }

    public function makePreference($id_producto, $cantidad)
    {
        // CONSULTO LA INFO DEL PRODUCTO
        $fProducto = $this->objConsultasProductos->selectProducto($id_producto);

        // Crea un nuevo ítem (producto a comprar)
        $item = new Item();
        $item->id = $fProducto["id_producto"]; // Reemplaza con el ID del producto
        $item->title = $fProducto["nombre_producto"]; // Reemplaza con el nombre del producto
        $item->quantity = $cantidad;

        $total = $cantidad * $fProducto["precio_producto"];

        $item->unit_price = $total;  // Precio del producto

        // Crea una preferencia de pago
        $preference = new Preference();
        $preference->items = [$item];

        // Guarda la preferencia
        $preference->save();

        // Redirecciona al usuario a payment.php pasando el preference_id
        header('Location: ../../Views/Cliente/btnPagar.php?preference_id=' . $preference->id);
        exit;
    }

    public function makePreferenceCarrito($id_cliente)
    {
        // CONSULTO EL CARRITO EN USO
        $fCarrito = $this->objConsultasCarrito->selectCarrito($id_cliente);

        $id_carrito = $fCarrito["id_carrito"];

        // Consultar los productos del carrito
        $itemsCarrito = $this->objConsultasItemsCarrito->selectItemsCarrito($id_carrito);

        // Verificar cantidad de productos en el carrito
        if ($itemsCarrito['filas'] == 0) {
            // No hay productos en el carrito
            // Aquí puedes manejar el caso de error o redireccionar a otra página
            header('Location: ../../error.php');
            exit;
        } elseif ($itemsCarrito['filas'] == 1) {
            // Hay un solo producto en el carrito
            $producto = $itemsCarrito['resultado'];

            // Crear el ítem (producto a comprar)
            $item = new Item();
            $item->id = $producto["id_producto"];
            $item->title = $producto["nombre_producto"];
            $item->quantity = $producto["cantidad"]; // Asumiendo que la cantidad es 1 para un único producto
            $item->unit_price = $producto["precio_producto"];

            // Crear una preferencia de pago
            $preference = new Preference();
            $preference->items = [$item];
            $preference->save();

            // Redireccionar al usuario a payment.php pasando el preference_id
            header('Location: ../../Views/Cliente/btnPagar.php?preference_id=' . $preference->id);
            exit;
        } else {
            // Hay más de un producto en el carrito
            // Crear un arreglo de ítems para la preferencia
            $items = [];
            foreach ($itemsCarrito['resultados'] as $producto) {
                $item = new Item();
                $item->id = $producto["id_producto"];
                $item->title = $producto["nombre_producto"];
                $item->quantity = $producto["cantidad"]; // Asumiendo que la cantidad es 1 por cada producto
                $item->unit_price = $producto["precio_producto"];
                $items[] = $item;
            }

            // Crear una preferencia de pago con todos los ítems
            $preference = new Preference();
            $preference->items = $items;
            $preference->save();

            // Redireccionar al usuario a btnPagar.php pasando el preference_id
            header('Location: ../../Views/Cliente/btnPagar.php?preference_id=' . $preference->id);
            exit;
        }
    }
}
