<?php

require_once (__DIR__ . '/prepararConsulta.php');

require_once (__DIR__ . '/consultasCarrito.php');

class ConsultasItemsCarrito
{
    public $objPrepararConsulta;

    // PARA CONSULTAS DEL CARRITO
    public $objConsultasCarrito;

    public function __construct()
    {
        $this->objPrepararConsulta = new PrepararConsulta();

        $this->objConsultasCarrito = new ConsultasCarrito();
    }

    // CREATE
    public function insertItemCarrito($cod_carrito, $cod_producto, $cantidad)
    {
        $insertItemCarrito = "INSERT INTO tbl_elementos_carrito(cod_carrito, cod_producto, cantidad) VALUES ( :cod_carrito, :cod_producto, :cantidad)";

        $bindValues = [
            ':cod_carrito' => $cod_carrito,
            ':cod_producto' => $cod_producto,
            ':cantidad' => $cantidad
        ];

        $this->objPrepararConsulta->prepararConsulta($insertItemCarrito, $bindValues);

        echo 'Se inserto el item en el carrito <br>';
    }

    // READ
    public function selectItemsCarrito($cod_carrito)
    {
        $selectItemsCarrito = "SELECT * FROM 
        tbl_elementos_carrito ic
        INNER JOIN tbl_productos p ON ic.cod_producto = p.id_producto
        INNER JOIN tbl_categorias c ON p.cod_categoria = c.id_categoria
        WHERE cod_carrito = :cod_carrito";

        $bindValues = [
            ':cod_carrito' => $cod_carrito
        ];

        $resultSelectItemsCarrito = $this->objPrepararConsulta->prepararConsulta($selectItemsCarrito, $bindValues);

        if ($resultSelectItemsCarrito->rowCount() == 0) {
            return [
                'filas' => 0
            ];
        }

        if ($resultSelectItemsCarrito->rowCount() == 1) {
            return [
                'resultado' => $resultSelectItemsCarrito->fetch(),
                'filas' => 1
            ];

        } else {
            return [
                'resultados' => $resultSelectItemsCarrito->fetchAll(),
                'filas' => 2
            ];
        }
    }

    public function selectItemCarrito($cod_producto, $cod_carrito)
    {
        $selectItemCarrito = "SELECT * FROM tbl_elementos_carrito WHERE cod_producto = :cod_producto AND cod_carrito = :cod_carrito";

        $bindValues = [
            ':cod_producto' => $cod_producto,
            ':cod_carrito' => $cod_carrito
        ];

        $resultSelectItemCarrito = $this->objPrepararConsulta->prepararConsulta($selectItemCarrito, $bindValues);

        return $resultSelectItemCarrito->fetch();
    }

    // UPDATE
    public function updateItemCarrito($cod_producto, $cod_carrito, $cantidad)
    {
        $updateItemCarrito = "UPDATE tbl_elementos_carrito SET cantidad = :cantidad WHERE cod_producto = :cod_producto AND cod_carrito = :cod_carrito";

        $bindValues = [
            ':cod_producto' => $cod_producto,
            ':cod_carrito' => $cod_carrito,
            ':cantidad' => $cantidad
        ];

        $this->objPrepararConsulta->prepararConsulta($updateItemCarrito, $bindValues);

        echo 'Se actualizo la cantidad del producto en el carrito <br>';

    }

    // DELETE
    public function deleteItemCarrito($cod_cliente, $cod_producto)
    {
        // CONSULTA
        $deleteItemCarrito = "DELETE FROM tbl_elementos_carrito WHERE cod_producto = :cod_producto AND cod_carrito = :cod_carrito";

        // CONSULTO EL CARRITO NO COMPRADO
        $fCarrito = $this->objConsultasCarrito->selectCarrito($cod_cliente);

        // ID DEL CARRITO
        $id_carrito = $fCarrito["id_carrito"];

        // BINDVALUES
        $bindValues = [
            ':cod_producto' => $cod_producto,
            ':cod_carrito' => $id_carrito
        ];

        $this->objPrepararConsulta->prepararConsulta($deleteItemCarrito, $bindValues);

        echo 'Se eliminó el producto del carrito';
    }
}