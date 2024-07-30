<?php
require_once(__DIR__ . '/../../Models/consultasPedidos.php');

if (!function_exists('formularioEditarPedidos')) {
    function formularioEditarPedidos($id_pedido)
    {
        $objConsultasPedidos = new ConsultasPedidos();

        $tablaPedido = $objConsultasPedidos->consultarPedidoPorId($id_pedido);

        if ($tablaPedido) {
?>
            <form action="../../Controllers/Administrador/editarPedido.php" class="form" method="post" enctype="multipart/form-data">
                <div class="row g-3 formulario">
                    <div class="col-md-12">
                        <label for="id_pedido">ID pedido</label> <br>
                        <input type="text" id="id_pedido" name="id_pedido" class="input" value="<?php echo htmlspecialchars($tablaPedido["id_pedido"], ENT_QUOTES, 'UTF-8') ?>" required readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="nombre_usuario">Nombre Cliente</label> <br>
                        <input type="text" id="nombre_usuario" name="nombre_usuario" class="input" value="<?php echo htmlspecialchars($tablaPedido["nombre_cliente"], ENT_QUOTES, 'UTF-8') ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="Fecha_pedido">Fecha</label> <br>
                        <input type="date" id="Fecha_pedido" name="Fecha_pedido" class="input" value="<?php echo $tablaPedido["fecha_pedido"] ?>" required><br>
                    </div>
                    <div class="col-md-6">
                        <label for="total_pedido">Total</label> <br>
                        <input type="number" id="total_pedido" name="total_pedido" class="input" value="<?php echo htmlspecialchars($tablaPedido["total"], ENT_QUOTES, 'UTF-8') ?>" required><br>
                    </div>
                    <div class="col-md-6">
                        <label for="metodo_pago">Metodo de Pago</label> <br>
                        <select name="metodo_pago" id="metodo_pago" class="input" required>
                            <option value="<?php echo $tablaPedido["metodo_pago"] ?>"><?php echo $tablaPedido["metodo_pago"] ?></option>
                            <option value="PayPal">PayPal</option>
                            <option value="Tarjeta de Crédito">Tarjeta de Crédito</option>
                            <option value="Transferencia Bancaria">Transferencia Bancaria</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="form-button">Enviar</button>
                    </div>
                </div>
            </form>
<?php
        } else {
            echo "No se encontró el pedido.";
        }
    }
}
?>

<!-- Consulta sql usada para actualizar -->
<!-- UPDATE tbl_pedidos p JOIN tbl_usuarios u ON p.cod_cliente = u.id_usuario JOIN tbl_metodo_pago m ON p.cod_metodo_pago = m.id_metodo SET u.nombre_usuario = 'Karen', p.fecha_pedido = '2024-07-19', p.total = 796259, m.nombre_metodo = 'Tarjeta de Crédito' WHERE p.id_pedido = 3;  -->