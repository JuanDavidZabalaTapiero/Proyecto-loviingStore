<?php

require_once (__DIR__ . '/../../Models/consultasInventario.php');

class TblInventarioController
{
    public $objConsultasInventario;

    public function __construct()
    {
        $this->objConsultasInventario = new ConsultasInventario();
    }
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
                <td><a href="" class="btn btn-warning">Editar</a></td>
                <td><a href="" class="btn btn-danger">Eliminar</a></td>
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
                    <td><a href="" class="btn btn-warning">Editar</a></td>
                    <td><a href="" class="btn btn-danger">Eliminar</a></td>
                </tr>
                <?php
            }
        }
    }
}