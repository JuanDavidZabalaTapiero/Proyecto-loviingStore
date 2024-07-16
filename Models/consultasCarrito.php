<?php

require_once(__DIR__ . '/prepararConsulta.php');

class ConsultasCarrito
{
    public $objPrepararConsulta;

    public function __construct()
    {
        $this->objPrepararConsulta = new PrepararConsulta();
    }

    // CREATE
    public function insertCarrito($cod_cliente)
    {
        $insertCarrito = "INSERT INTO tbl_carrito(cod_cliente, fecha_creacion, compra_realizada) VALUES (:cod_cliente, :fecha_creacion, :compra_realizada)";

        $compra_realizada = "No";

        $fecha_creacion = date("Y-m-d");

        $bindValues = [
            ':cod_cliente' => $cod_cliente,
            ':fecha_creacion' => $fecha_creacion,
            ':compra_realizada' => $compra_realizada
        ];

        $this->objPrepararConsulta->prepararConsulta($insertCarrito, $bindValues);

        $id_carrito_creado = $this->objPrepararConsulta->conexion->lastInsertId();

        echo 'Carrito creado <br>';

        return $id_carrito_creado;
    }

    // READ
    public function selectCarrito($cod_cliente)
    {
        $selectCarrito = "SELECT * FROM tbl_carrito WHERE cod_cliente = :cod_cliente AND compra_realizada = 'No'";

        $bindValues = [
            ':cod_cliente' => $cod_cliente
        ];

        $resultadoSelectCarrito = $this->objPrepararConsulta->prepararConsulta($selectCarrito, $bindValues);

        return $resultadoSelectCarrito->fetch();
    }

    // UPDATE
    public function updateCarrito($id_carrito)
    {
        $updateCarrito = "UPDATE tbl_carrito SET compra_realizada = :compra_realizada WHERE id_carrito = :id_carrito";

        $compra_realizada = "Si";

        $bindValues = [
            ':id_carrito' => $id_carrito,
            ':compra_realizada' => $compra_realizada
        ];

        $this->objPrepararConsulta->prepararConsulta($updateCarrito, $bindValues);

        echo 'Carrito actualizado <br>';
    }

    // DELETE
}
