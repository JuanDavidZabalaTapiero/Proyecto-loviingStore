<?php

// PREPARAR CONSULTA
require_once (__DIR__ . '/prepararConsulta.php');

class ConsultasUsuarios
{
    // PARA PREPARAR LA CONSULTA
    public $objPrepararConsulta;

    public function __construct()
    {
        $this->objPrepararConsulta = new PrepararConsulta();
    }

    // CREATE

    // READ
    public function selectUsuario($nombre)
    {
        $selectUsuario = "SELECT * FROM tbl_usuarios WHERE nombre_usuario = :nombre ";

        $bindValues = [
            ':nombre' => $nombre
        ];

        $resultSelectUsuario = $this->objPrepararConsulta->prepararConsulta($selectUsuario, $bindValues);

        $fUser = $resultSelectUsuario->fetch();

        return $fUser;
    }

    // UPDATE

    // DELETE
}