<?php

require_once (__DIR__ . '/../../Models/consultasPedidos.php');

class TablaPedidos
{
    public $objConsultasPedidos;

    public function __construct()
    {
        $this->objConsultasPedidos = new ConsultasPedidos();
    }

    public function tablaPedidos()
    {
        $tabla = $this->objConsultasPedidos->consultarPedidos();

        if (!isset($tabla)) {
            echo '
            <h2>No hay productos registrados</h2>
            ';
        } else {
            foreach ($tabla as $f) {
                ?>
                <tr>
                    <td><?php echo $f["id_pedido"] ?></td>
                    <td><?php echo $f["nombre_cliente"] ?></td>
                    <td><?php echo $f["fecha_pedido"] ?></td>
                    <td><?php echo $f["total"] ?></td>
                    <td><?php echo $f["metodo_pago"] ?></td>

                    <td><a href="" class="btn btn-primary">Ver</a></td>
                    <td><a href="editarProducto.php?idProd=<?php echo $f["id_pedido"] ?>'" class="btn btn-warning">Editar</a></td>
                    <td><a href="../../Controllers/Administrador/eliminarProducto.php?idProd=<?php echo $f["id_pedido"] ?>"
                            class="btn btn-danger">Eliminar</a></td>
                </tr>
                <?php

            }
        }
    }
}