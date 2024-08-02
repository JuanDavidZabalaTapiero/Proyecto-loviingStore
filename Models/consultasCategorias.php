<?php

require_once (__DIR__ . '/prepararConsulta.php');

class ConsultasCategorias
{
    public $objPrepararConsulta;

    public function __construct()
    {
        $this->objPrepararConsulta = new PrepararConsulta();
    }

    // CREATE

    // READ
    public function selectAllCategorias()
    {
        $selectAllCategorias = "SELECT * FROM tbl_categorias";

        $result = $this->objPrepararConsulta->prepararConsulta($selectAllCategorias, 0);

        if ($result->rowCount() == 0) {
            return [
                'filas' => 0
            ];
        } elseif ($result->rowCount() == 1) {
            return [
                'resultado' => $result->fetch(),
                'filas' => 1
            ];
        } else {
            return [
                'resultados' => $result->fetchAll(),
                'filas' => 2
            ];
        }
    }

    // UPDATE

    // DELETE
}
