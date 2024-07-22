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
    public function deleteInv($id_inv){
        $deleteInv = "DELETE FROM tbl_inventario WHERE id_inv = :id_inv";

        $bindValues = [
            ':id_inv' => $id_inv
        ];

        $this->objPrepararConsulta->prepararConsulta($deleteInv, $bindValues);

        ?>
        <script>
            alert('Registro del inventario eliminado');
        </script>
        <?php
    }
}