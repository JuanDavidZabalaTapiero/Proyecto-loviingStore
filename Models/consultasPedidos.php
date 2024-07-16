<?php

require_once(__DIR__ . '/prepararConsulta.php');

class ConsultasPedidos
{
    public $objPrepararConsulta;

    public function __construct()
    {
        $this->objPrepararConsulta = new PrepararConsulta();
    }
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
}