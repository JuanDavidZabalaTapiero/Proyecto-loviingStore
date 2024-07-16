<?php

// CONSULTAS DE ITEMS_CARRITO
require_once (__DIR__ . '/../../Models/consultasItemsCarrito.php');

// CONSULTAS DEL CARRITO 
require_once (__DIR__ . '/../../Models/consultasCarrito.php');

class UpdateCantidadItemController
{
    // PARA CONSULTAS DE ITEMS_CARRITO
    public $objConsultasItemsCarrito;

    // PARA CONSULTAS DEL CARRITO
    public $objConsultasCarrito;

    public function __construct()
    {
        $this->objConsultasItemsCarrito = new ConsultasItemsCarrito();

        $this->objConsultasCarrito = new ConsultasCarrito();
    }

    public function updateCantidadItem($cod_cliente, $cod_producto, $cantidad)
    {
        // CONSULTO EL CARRITO SIN COMPRAR DEL CLIENTE
        $fCarrito = $this->objConsultasCarrito->selectCarrito($cod_cliente);

        $id_carrito = $fCarrito["id_carrito"];

        $this->objConsultasItemsCarrito->updateItemCarrito($cod_producto, $id_carrito, $cantidad);

    }
}