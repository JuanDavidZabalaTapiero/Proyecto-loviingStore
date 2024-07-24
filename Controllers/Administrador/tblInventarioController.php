<?php

require_once(__DIR__ . '/../../Models/consultasInventario.php');

class TblInventarioController
{
    public $objConsultasInventario;

    public function __construct()
    {
        $this->objConsultasInventario = new ConsultasInventario();
    }

    // CREATE

    // READ
    public function showTblInventario()
    {
        $arraySelectAllInventario = $this->objConsultasInventario->selectAllInventario();

        $filas = $arraySelectAllInventario['filas'];

        if ($filas == 0) {
            echo 'No hay nada en el inventario';
        }

        if ($filas == 1) {
            $fInven = $arraySelectAllInventario['resultado'];

?>
            <tr>
                <td><?php echo $fInven["id_inv"] ?></td>
                <td><?php echo $fInven["nombre_producto"] ?></td>
                <td><?php echo $fInven["entradas"] ?></td>
                <td><?php echo $fInven["salidas"] ?></td>
                <td><?php echo $fInven["stock_inv"] ?></td>
                <td>
                    <a href="../../Views/Administrador/editarInventario.php?id_inv=<?php echo $fInven["id_inv"] ?>" class="btn btn-warning">Editar</a>
                </td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="form" value="del_inv">
                        <input type="hidden" name="id_inv" value="<?php echo $fInven["id_inv"] ?>">
                        <input type="submit" class="btn btn-danger" value="Eliminar">
                    </form>
                </td>
            </tr>
            <?php
        } else {
            $fInventario = $arraySelectAllInventario['resultados'];

            foreach ($fInventario as $fInven) {
            ?>
                <tr>
                    <td><?php echo $fInven["id_inv"] ?></td>
                    <td><?php echo $fInven["nombre_producto"] ?></td>
                    <td><?php echo $fInven["entradas"] ?></td>
                    <td><?php echo $fInven["salidas"] ?></td>
                    <td><?php echo $fInven["stock_inv"] ?></td>
                    <td>
                        <a href="../../Views/Administrador/editarInventario.php?id_inv=<?php echo $fInven["id_inv"] ?>" class="btn btn-warning">Editar</a>
                    </td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="form" value="del_inv">
                            <input type="hidden" name="id_inv" value="<?php echo $fInven["id_inv"] ?>">
                            <input type="submit" class="btn btn-danger" value="Eliminar">
                        </form>
                    </td>
                </tr>
        <?php
            }
        }
    }

    // UPDATE
    public function updateInv($id_inv)
    {
        $fInv = $this->objConsultasInventario->selectInv($id_inv);

        ?>
        <form action="" class="form" method="post" enctype="multipart/form-data">

            <input type="hidden" name="form" value="updateInv">
            <input type="hidden" name="id_producto" value="<?php echo $fInv["id_producto"] ?>">

            <div class="row g-3 formulario">

                <div class="col-md-3">
                    <label for="producto_inv">Producto</label> <br>
                    <input type="text" id="producto_inv" name="producto_inv" class="input" value="<?php echo $fInv["nombre_producto"] ?>" readonly>
                </div>

                <div class="col-md-3">
                    <label for="entradas_inv">Entradas</label> <br>
                    <input type="number" id="entradas_inv" name="entradas_inv" class="input" value="<?php echo $fInv["entradas"] ?>">
                </div>

                <div class="col-md-3">
                    <label for="salidas_inv">Salidas</label> <br>
                    <input type="number" id="salidas_inv" name="salidas_inv" class="input" value="<?php echo $fInv["salidas"] ?>">
                </div>

                <div class="col-md-3">
                    <label for="stock_inv">Stock</label> <br>
                    <input type="number" id="stock_inv" name="stock_inv" class="input" value="<?php echo $fInv["inv_stock"] ?>">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="form-button">Envíar</button>
            </div>
        </form>
    <?php
    }

    public function processUpdateInv($id_producto, $entradas, $salidas, $stock)
    {
        $this->objConsultasInventario->updateInv($id_producto, $entradas, $salidas, $stock);
    }

    // DELETE
    public function deleteInv($id_inv)
    {
        $this->objConsultasInventario->deleteInv($id_inv);
    }
}
