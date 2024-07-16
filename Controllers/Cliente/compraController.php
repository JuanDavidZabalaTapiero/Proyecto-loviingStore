<?php

// CONSULTAS DE PRODUCTOS
require_once (__DIR__ . '/../../Models/consultasProductos.php');

// CONSULTAS DE CARRITO
require_once (__DIR__ . '/../../Models/consultasCarrito.php');

// CONSULTAS DE ITEMS_CARRITO
require_once (__DIR__ . '/../../Models/consultasItemsCarrito.php');

class CompraController
{
    // PARA CONSULTAS DE PRODUCTOS
    public $objConsultasProductos;

    // PARA CONSULTAS DE CARRITO
    public $objConsultasCarrito;

    // PARA CONSULTAS DE ITEMS_CARRITO
    public $objConsultasItemsCarrito;

    public function __construct()
    {
        $this->objConsultasProductos = new ConsultasProductos();

        $this->objConsultasCarrito = new ConsultasCarrito();

        $this->objConsultasItemsCarrito = new ConsultasItemsCarrito();
    }

    public function comprarProducto($id_cliente, $id_producto, $cantidad)
    {
        // VERIFICO QUE EL CARRITO EXISTA
        $fCarrito = $this->objConsultasCarrito->selectCarrito($id_cliente);

        if (!$fCarrito) {
            // CREO EL CARRITO Y OBTENGO SU ID
            $id_carrito = $this->objConsultasCarrito->insertCarrito($id_cliente);
        } else {
            $id_carrito = $fCarrito["id_carrito"];
        }

        // VERIFICO SI EL ITEM YA ESTÁ EN EL CARRITO
        $fItem = $this->objConsultasItemsCarrito->selectItemCarrito($id_producto, $id_carrito);

        if (!$fItem) {

            // INSERTO EL ITEM EN EL CARRITO
            $this->objConsultasItemsCarrito->insertItemCarrito($id_carrito, $id_producto, $cantidad);
        }

        // VERIFICO SI EL CARRITO TIENE MÁS DE 1 ITEM

        $arraySelectItemsCarrito = $this->objConsultasItemsCarrito->selectItemsCarrito($id_carrito);

        $filas = $arraySelectItemsCarrito['filas'];

        if ($filas == 1) {
            // ACTUALIZO LA CANTIDAD QUE SE TIENE DEL PRODUCTO
            $this->objConsultasItemsCarrito->updateItemCarrito($id_producto, $id_carrito, $cantidad);

            // ACTUALIZO EL ESTADO DEL CARRITO
            $this->objConsultasCarrito->updateCarrito($id_carrito);

            // ACTUALIZO EL STOCK DEL PRODUCTO
            $this->objConsultasProductos->updateProducto($id_producto, $cantidad);
        }

        if ($filas == 2) {
            ?>
            <script>
                location.href = "../../Views/Cliente/carrito.php";
            </script>
            <?php
        }
    }
}