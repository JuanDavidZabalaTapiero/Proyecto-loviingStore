<?php
require_once (__DIR__ . '/../../Models/consultasPedidos.php');

// Evita redeclarar la función si ya está definida en otro archivo
if (!function_exists('formularioEditarPedidos')) {
    function formularioEditarPedidos($id_pedido)
    {
        $objPrepararConsulta = new ConsultasPedidos();

        $tablaPedido = $objPrepararConsulta->consultarPedidoPorId($id_pedido);

        if ($tablaPedido) {
            echo '
                <form action="../../Controllers/Administrador/editarPedido.php" class="form" method="post" enctype="multipart/form-data">
                    <div class="row g-3 formulario">
                        <div class="col-md-12">
                            <label for="id_pedido">ID pedido</label> <br>
                            <input type="text" id="id_pedido" name="id_pedido" class="input" value="' . $tablaPedido["id_pedido"] . '" required readonly> 
                        </div>
                        <div class="col-md-6">
                            <label for="nombre_cliente">Nombre Cliente</label> <br>
                            <input type="text" id="nombre_cliente" name="nombre_cliente" class="input" value="' . $tablaPedido["nombre_cliente"] . '" required>
                        </div>
                        <div class="col-md-6">
                            <label for="Fecha_pedido">Fecha</label> <br>
                            <input type="date" id="Fecha_pedido" name="Fecha_pedido" class="input" value="' . $tablaPedido["fecha_pedido"] . '" required><br>
                        </div>
                        <div class="col-md-12">
                            <label for="total_pedido">Total</label> <br>
                            <input type="number" id="total_pedido" name="total_pedido" class="input" value="' . $tablaPedido["total"] . '" required><br>               
                        </div>
                        <div class="col-md-12">
                            <label for="metodo_pago">Metodo de pago</label> <br>
                            <input type="text" id="metodo_pago" name="metodo_pago" class="input" value="' . $tablaPedido["metodo_pago"] . '" required><br>               
                        </div>
                        <div class="text-center">
                            <button type="submit" class="form-button">Enviar</button>
                        </div>
                    </div>
                </form>';
        } else {
            echo "No se encontró el pedido.";
        }
    }
}
?>
