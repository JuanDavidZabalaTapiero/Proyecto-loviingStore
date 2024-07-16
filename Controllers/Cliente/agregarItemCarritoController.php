<?php

// CONSULTAS DE CARRITO
require_once (__DIR__ . '/../../Models/consultasCarrito.php');

// CONSULTAS DE ITEMS_CARRITO
require_once (__DIR__ . '/../../Models/consultasItemsCarrito.php');

class AgregarItemCarritoController
{
    // PARA CONSULTAS DE CARRITO
    public $objConsultasCarrito;

    // PARA CONSULTAS DE ITEMS_CARRITO
    public $objConsultasItemsCarrito;

    public function __construct()
    {
        $this->objConsultasCarrito = new ConsultasCarrito();

        $this->objConsultasItemsCarrito = new ConsultasItemsCarrito();
    }

    public function agregarItemCarrito($cod_cliente, $id_producto, $cantidad)
    {
        // VERIFICO QUE EL CARRITO EXISTA
        $fCarrito = $this->objConsultasCarrito->selectCarrito($cod_cliente);

        if (!$fCarrito) {

            // CREO EL CARRITO Y OBTENGO SU ID
            $id_carrito = $this->objConsultasCarrito->insertCarrito($cod_cliente);

        } else {
            $id_carrito = $fCarrito["id_carrito"];
        }

        // VERIFICO SI EL ITEM YA ESTÁ EN EL CARRITO
        $fItem = $this->objConsultasItemsCarrito->selectItemCarrito($id_producto, $id_carrito);

        if (!$fItem) {
            // INSERTO EL ITEM AL CARRITO
            $this->objConsultasItemsCarrito->insertItemCarrito($id_carrito, $id_producto, $cantidad);
        } else {

            // ACTUALIZO LA CANTIDAD DEL ITEM
            $this->objConsultasItemsCarrito->updateItemCarrito($id_producto, $id_carrito, $cantidad);
        }
    }
}