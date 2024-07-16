<?php

require_once (__DIR__ . '/../../Models/consultasItemsCarrito.php');

class DeleteItemCarritoController
{
    // PARA CONSULTAS DE ITEMS_CARRITO
    public $objConsultasItemsCarrito;

    public function __construct()
    {
        $this->objConsultasItemsCarrito = new ConsultasItemsCarrito();
    }

    public function deleteItemCarrito($cod_cliente, $cod_producto)
    {
        $this->objConsultasItemsCarrito->deleteItemCarrito($cod_cliente, $cod_producto);
    }
}