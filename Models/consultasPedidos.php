<?php

require_once(__DIR__ . '/prepararConsulta.php');

class ConsultasPedidos
{
    public $objPrepararConsulta;

    public function __construct()
    {
        $this->objPrepararConsulta = new PrepararConsulta();
    }

    // CREATE

    // READ
    public function consultarPedidos()
    {
        $consultarPedidos = "SELECT 
    p.id_pedido,
    u.nombre_usuario AS nombre_cliente,
    p.fecha_pedido,
    p.total,
    m.nombre_metodo AS metodo_pago
    FROM 
    tbl_pedidos p
    JOIN 
    tbl_usuarios u ON p.cod_cliente = u.id_usuario
    JOIN 
    tbl_metodo_pago m ON p.cod_metodo_pago = m.id_metodo";

        $resultConsultarPedidos = $this->objPrepararConsulta->prepararConsulta($consultarPedidos, 0);

        $fPedidos = $resultConsultarPedidos->fetchAll();

        return $fPedidos;
    }

    // UPDATE
    public function actualizarPedido($id_pedido, $nuevo_cod_cliente, $nueva_fecha_pedido, $nuevo_total, $nuevo_cod_metodo_pago) {
        $objConexionBd = new ConexionBd();
        $conexion = $objConexionBd->getConexion();
    
        try {
            // Inicia una transacción
            $conexion->beginTransaction();
    
            // Actualiza el pedido en tbl_pedidos
            $sqlPedido = "UPDATE tbl_pedidos SET cod_cliente = :cod_cliente, fecha_pedido = :fecha_pedido, total = :total, cod_metodo_pago = :cod_metodo_pago WHERE id_pedido = :id_pedido";
            $resultPedido = $conexion->prepare($sqlPedido);
            $resultPedido->bindParam(":id_pedido", $id_pedido);
            $resultPedido->bindParam(":cod_cliente", $nuevo_cod_cliente);
            $resultPedido->bindParam(":fecha_pedido", $nueva_fecha_pedido);
            $resultPedido->bindParam(":total", $nuevo_total);
            $resultPedido->bindParam(":cod_metodo_pago", $nuevo_cod_metodo_pago);
            $resultPedido->execute();
    
            // Confirma la transacción
            $conexion->commit();
    
            echo '
            <script>
                alert("Pedido actualizado correctamente.");
                location.href="../../Views/Administrador/consultarProductos.php";
            </script>
            ';
        } catch (Exception $e) {
            // Reversa la transacción si hay un error
            $conexion->rollBack();
            echo '
            <script>
                alert("Error al actualizar el pedido: ' . $e->getMessage() . '");
                location.href="../../Views/Administrador/consultarProductos.php";
            </script>
            ';
        }
    }
    

    // DELETE
}