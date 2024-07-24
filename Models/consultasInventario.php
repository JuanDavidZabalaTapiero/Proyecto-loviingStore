<?php

require_once(__DIR__ . '/prepararConsulta.php');

require_once(__DIR__ . '/consultasProductos.php');

class ConsultasInventario
{
    public $objPrepararConsulta;

    public $objConsultasProductos;

    public function __construct()
    {
        $this->objPrepararConsulta = new PrepararConsulta();

        $this->objConsultasProductos = new ConsultasProductos();
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

    public function selectInv($id_inv)
    {
        $selectInv = "SELECT *, i.stock AS inv_stock FROM tbl_inventario i
        INNER JOIN tbl_productos p ON i.cod_producto = p.id_producto
        WHERE id_inv = :id_inv";

        $bindValues = [
            ':id_inv' => $id_inv
        ];

        $resultSelectInv = $this->objPrepararConsulta->prepararConsulta($selectInv, $bindValues);

        return $resultSelectInv->fetch();
    }

    // UPDATE
    public function updateInv($id_producto, $entradas, $salidas, $stock)
    {
        $updateInv = "UPDATE tbl_inventario SET entradas = :entradas, salidas = :salidas, stock = :stock WHERE cod_producto = :cod_producto";

        $bindValues = [
            ':entradas' => $entradas,
            ':salidas' => $salidas,
            ':stock' => $stock,
            ':cod_producto' => $id_producto
        ];

        $this->objPrepararConsulta->prepararConsulta($updateInv, $bindValues);

        // ACTUALIZO EL STOCK DEL PRODUCTO
        $this->objConsultasProductos->updateStockProducto($id_producto, $stock);

?>
        <script>
            alert("Inventario actualizado");
            location.href = "../../Views/Administrador/consultarInventario.php";
        </script>
    <?php
    }

    // DELETE
    public function deleteInv($id_inv)
    {
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
