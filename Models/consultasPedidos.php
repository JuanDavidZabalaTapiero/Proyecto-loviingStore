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
    public function insertPedido($cod_cliente, $fecha_pedido, $total, $cod_metodo_pago)
    {
        $insertPedido = "INSERT INTO tbl_pedidos(cod_cliente, fecha_pedido, total, cod_metodo_pago) VALUES (:cod_cliente, :fecha_pedido, :total, :cod_metodo_pago)";

        $bindValues = [
            ':cod_cliente' => $cod_cliente,
            ':fecha_pedido' => $fecha_pedido,
            ':total' => $total,
            ':cod_metodo_pago' => $cod_metodo_pago
        ];

        $this->objPrepararConsulta->prepararConsulta($insertPedido, $bindValues);

?>
        <script>
            alert("Pedido registrado");
            location.href = "../../Views/Administrador/consultarPedidos";
        </script>
<?php
    }

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

    public function consultarPedidoPorId($id_pedido)
    {
        $consulta = "SELECT 
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
        tbl_metodo_pago m ON p.cod_metodo_pago = m.id_metodo
        WHERE p.id_pedido = :id_pedido";

        $bindValues = [':id_pedido' => $id_pedido];

        $result = $this->objPrepararConsulta->prepararConsulta($consulta, $bindValues);

        return $result->fetch();
    }

    // UPDATE
    public function actualizarPedido($nombre_usuario, $fecha_pedido, $total, $metodo_pago, $id_pedido)
    {
        $objConexionBd = new ConexionBd();
        $conexion = $objConexionBd->getConexion();

        try {
            // Inicia una transacción
            $conexion->beginTransaction();


            // Actualiza el pedido, el usuario y el método de pago
            $sqlActualizacion = "UPDATE tbl_pedidos p
                                 JOIN tbl_usuarios u ON p.cod_cliente = u.id_usuario
                                 JOIN tbl_metodo_pago m ON p.cod_metodo_pago = m.id_metodo
                                 SET u.nombre_usuario = :nombre_usuario,
                                     p.fecha_pedido = :fecha_pedido,
                                     p.total = :total,
                                     m.nombre_metodo = :nombre_metodo
                                 WHERE p.id_pedido = :id_pedido";

            $resultActualizacion = $conexion->prepare($sqlActualizacion);

            // Asigna valores a los parámetros de la consulta
            $resultActualizacion->bindParam(":id_pedido", $id_pedido);
            $resultActualizacion->bindParam(":nombre_usuario", $nombre_usuario);
            $resultActualizacion->bindParam(":fecha_pedido", $fecha_pedido);
            $resultActualizacion->bindParam(":total", $total);
            $resultActualizacion->bindParam(":nombre_metodo", $metodo_pago);

            // Ejecuta la consulta de actualización
            $resultActualizacion->execute();

            // Confirma la transacción
            $conexion->commit();

            echo '
            <script>
                alert("Pedido actualizado correctamente.");
                location.href="../../Views/Administrador/consultarPedidos.php";
            </script>
            ';
        } catch (Exception $e) {
            // Reversa la transacción si hay un error
            $conexion->rollBack();
            echo '
            <script>
                alert("Error al actualizar el pedido: ' . $e->getMessage() . '");
                location.href="../../Views/Administrador/consultarPedidos.php";
            </script>
            ';
        }
    }


    // DELETE
}
