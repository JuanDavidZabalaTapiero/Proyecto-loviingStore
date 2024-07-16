<?php

// CONSULTAS ITEMS_CARRITO
require_once (__DIR__ . '/../../Models/consultasItemsCarrito.php');

// CONSULTAS CARRITO
require_once (__DIR__ . '/../../Models/consultasCarrito.php');

// CONSULTAS PRODUCTOS
require_once (__DIR__ . '/../../Models/consultasProductos.php');

class ComprarCarritoController
{
    // PARA CONSULTAS DE ITEMS_CARRITO
    public $objConsultasItemsCarrito;

    // PARA CONSULTAS DE CARRITO
    public $objConsultasCarrito;

    // PARA CONSULTAS DE PRODUCTOS
    public $objConsultasProductos;

    public function __construct()
    {
        $this->objConsultasItemsCarrito = new ConsultasItemsCarrito();

        $this->objConsultasCarrito = new ConsultasCarrito();

        $this->objConsultasProductos = new ConsultasProductos();
    }

    public function comprarCarrito($cod_cliente)
    {
        // ACTUALIZO EL STOCK DE LOS PRODUCTOS

        // 1. CONSULTO EL CARRITO
        $fCarrito = $this->objConsultasCarrito->selectCarrito($cod_cliente);

        $id_carrito = $fCarrito["id_carrito"];

        // 2. CONSULTO LOS ITEMS DEL CARRITO
        $arraySelectItemsCarrito = $this->objConsultasItemsCarrito->selectItemsCarrito($id_carrito);

        $filas = $arraySelectItemsCarrito['filas'];

        if ($filas == 1) {
            $fItem = $arraySelectItemsCarrito['resultado'];

            $id_producto = $fItem["cod_producto"];

            $cantidad = $fItem["cantidad"];

            // ACTUALIZO EL STOCK ACORDE A LA CANTIDAD
            $this->objConsultasProductos->updateProducto($id_producto, $cantidad);

        } else {
            $fItems = $arraySelectItemsCarrito['resultados'];

            foreach ($fItems as $fItem) {
                $id_producto = $fItem["cod_producto"];

                $cantidad = $fItem["cantidad"];

                // ACTUALIZO EL STOCK ACORDE A LA CANTIDAD
                $this->objConsultasProductos->updateProducto($id_producto, $cantidad);
            }
        }

        // ACTUALIZO EL ESTADO DEL CARRITO
        $this->objConsultasCarrito->updateCarrito($id_carrito);
    }
}