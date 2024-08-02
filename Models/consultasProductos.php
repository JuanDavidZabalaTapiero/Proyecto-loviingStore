<?php

require_once(__DIR__ . '/prepararConsulta.php');

class ConsultasProductos
{
    public $objPrepararConsulta;

    public function __construct()
    {
        $this->objPrepararConsulta = new PrepararConsulta();
    }

    // CREATE

    // READ
    public function selectProducto($id_producto)
    {
        $selectProducto = "SELECT * FROM tbl_productos WHERE id_producto = :id_producto";

        $bindValues = [
            ':id_producto' => $id_producto
        ];

        $resultadoSelectProducto = $this->objPrepararConsulta->prepararConsulta($selectProducto, $bindValues);

        return $resultadoSelectProducto->fetch();
    }

    public function selectProductos()
    {
        // CONSULTA
        $selectProductos = "SELECT * 
        FROM tbl_productos p
        INNER JOIN tbl_categorias c ON p.cod_categoria = c.id_categoria";

        $resultSelectProductos = $this->objPrepararConsulta->prepararConsulta($selectProductos, 0);

        if ($resultSelectProductos->rowCount() == 0) {
            return [
                'filas' => 0
            ];
        }

        if ($resultSelectProductos->rowCount() == 1) {
            return [
                'resultado' => $resultSelectProductos->fetch(),
                'filas' => 1
            ];
        } else {
            return [
                'resultados' => $resultSelectProductos->fetchAll(),
                'filas' => 2
            ];
        }
    }

    public function selectProductosLike($palabra)
    {
        // Definir la consulta SQL sin los comodines
        $selectProductosLike = "SELECT * 
        FROM tbl_productos p
        INNER JOIN tbl_categorias c ON p.cod_categoria = c.id_categoria
        WHERE nombre_producto LIKE :palabra";

        // Incluir los comodines en el valor del parámetro
        $palabra = '%' . $palabra . '%';

        // Definir los valores de los parámetros
        $bindValues = [
            ':palabra' => $palabra
        ];

        // Preparar y ejecutar la consulta usando el método prepararConsulta
        $result = $this->objPrepararConsulta->prepararConsulta($selectProductosLike, $bindValues);

        // Verificar si se encontraron resultados
        if ($result->rowCount() == 0) {
            return ['filas' => 0];
        }

        // Devolver los resultados
        if ($result->rowCount() == 1) {
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
    public function updateProducto($id_producto, $cantidad)
    {
        $updateProducto = "UPDATE tbl_productos SET stock = stock - :cantidad WHERE id_producto = :id_producto";

        $bindValues = [
            ':cantidad' => $cantidad,
            ':id_producto' => $id_producto
        ];

        $this->objPrepararConsulta->prepararConsulta($updateProducto, $bindValues);
    }

    public function updateStockProducto($id_producto, $cantidad)
    {
        $updateProducto = "UPDATE tbl_productos SET stock = :cantidad WHERE id_producto = :id_producto";

        $bindValues = [
            ':cantidad' => $cantidad,
            ':id_producto' => $id_producto
        ];

        $this->objPrepararConsulta->prepararConsulta($updateProducto, $bindValues);
    }

    // DELETE
}
