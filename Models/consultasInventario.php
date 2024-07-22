<?php

require_once (__DIR__ . '/prepararConsulta.php');

class ConsultasInventario
{
    public $objPrepararConsulta;

    public function __construct()
    {
        $this->objPrepararConsulta = new PrepararConsulta();
    }

    // CREATE

    // READ
    public function selectAllInventario()
    {
        $selectAllInventario = "SELECT *, i.stock AS stock_inv 
        FROM tbl_inventario i 
        INNER JOIN tbl_productos p ON i.cod_producto = p.id_producto";

        $resultSelectAllInventario = $this->objPrepararConsulta->prepararConsulta($selectAllInventario, 0);

        if ($resultSelectAllInventario->rowCount() == 0) {
            return [
                'filas' => 0
            ];
        }

        if ($resultSelectAllInventario->rowCount() == 1) {
            return [
                'filas' => 1,
                'resultado' => $resultSelectAllInventario->fetch()
            ];
        } else {
            return [
                'filas' => 2,
                'resultados' => $resultSelectAllInventario->fetchAll()
            ];
        }

    }

    // UPDATE

    // DELETE
}