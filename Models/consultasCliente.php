<?php

require_once ('conexionBd.php');

class ConsultasCliente
{
    // CARRITO
    public function agregarProductoCarrito($cod_cliente, $fecha_creacion, $cod_producto, $cantidad)
    {
        $sql1 = "SELECT * FROM tbl_carrito WHERE cod_cliente = :cod_cliente AND compra_realizada = 'No'";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result1 = $conexion->prepare($sql1);

        $result1->bindParam(":cod_cliente", $cod_cliente);

        $result1->execute();

        $tablaIndCarrito = $result1->fetch();

        if ($tablaIndCarrito) {

            $id_carrito = $tablaIndCarrito["id_carrito"];

            // TABLA DE ELEMENTOS DEL CARRITO
            $sqlCon = "SELECT * FROM tbl_elementos_carrito
            WHERE cod_carrito = :cod_carrito AND cod_producto = :cod_producto";

            $resultCon = $conexion->prepare($sqlCon);

            $resultCon->bindParam(":cod_carrito", $id_carrito);
            $resultCon->bindParam(":cod_producto", $cod_producto);

            $resultCon->execute();

            $tablaIndElementosCarrito = $resultCon->fetch();

            if ($tablaIndElementosCarrito) {

                $sqlUp = "UPDATE tbl_elementos_carrito 
                SET cantidad = cantidad + 1 
                WHERE cod_carrito = :cod_carrito AND cod_producto = :cod_producto";

                $result = $conexion->prepare($sqlUp);

                $result->bindParam(":cod_carrito", $id_carrito);
                $result->bindParam(":cod_producto", $cod_producto);

                $result->execute();

                echo '
                <script>
                    alert("Se aumento la cantidad del producto en el carrito")
                    location.href="../../Views/Cliente/single.php?idProd=' . $cod_producto . '";
                </script>
                ';

            } else {
                $sqlIns = "INSERT INTO tbl_elementos_carrito
                (cod_carrito, 
                cod_producto, 
                cantidad) 
                VALUES 
                (:cod_carrito,
                :cod_producto,
                :cantidad)";

                $resultIns = $conexion->prepare($sqlIns);

                $resultIns->bindParam(":cod_carrito", $id_carrito);
                $resultIns->bindParam(":cod_producto", $cod_producto);
                $resultIns->bindParam(":cantidad", $cantidad);

                $resultIns->execute();

                echo '
                <script>
                    alert("Producto agregar al carrito")
                    location.href="../../Views/Cliente/single.php?idProd=' . $cod_producto . '";
                </script>
                ';
            }

        } else {
            // Creación del carrito
            $sql = "INSERT INTO tbl_carrito
            (cod_cliente, 
            fecha_creacion,
            compra_realizada) 
            VALUES 
            (:cod_cliente,
            :fecha_creacion,
            :compra_realizada)";

            $result = $conexion->prepare($sql);

            $No = "No";

            $result->bindParam(":cod_cliente", $cod_cliente);
            $result->bindParam(":fecha_creacion", $fecha_creacion);
            $result->bindParam(":compra_realizada", $No);

            $result->execute();

            // Añadir el producto al carrito
            $sql2 = "INSERT INTO tbl_elementos_carrito
            (cod_carrito, 
            cod_producto, 
            cantidad) 
            VALUES 
            (:cod_carrito,
            :cod_producto,
            :cantidad)";

            $result2 = $conexion->prepare($sql2);

            $cod_carrito = $conexion->lastInsertId();

            $result2->bindParam(":cod_carrito", $cod_carrito);
            $result2->bindParam(":cod_producto", $cod_producto);
            $result2->bindParam(":cantidad", $cantidad);

            $result2->execute();

            echo '
            <script>
                alert("Producto agregado al carrito")
                location.href="../../Views/Cliente/single.php?idProd=' . $cod_producto . '"
            </script>
        ';
        }
    }

    public function consultarNumElementosCarrito($cod_carrito)
    {
        $sql = "SELECT COUNT(*) AS total_filas
        FROM tbl_elementos_carrito
        WHERE cod_carrito = :cod_carrito";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":cod_carrito", $cod_carrito);

        $result->execute();

        $f = $result->fetch();

        return $f["total_filas"];
    }

    public function consultarCarrito($cod_cliente)
    {
        $sql = "SELECT * FROM tbl_carrito WHERE cod_cliente = :cod_cliente AND compra_realizada = 'No'";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":cod_cliente", $cod_cliente);

        $result->execute();

        return $result->fetch();
    }

    public function consultarItemsCarrito($cod_carrito)
    {
        $sql = "SELECT * FROM tbl_elementos_carrito WHERE cod_carrito = :cod_carrito";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":cod_carrito", $cod_carrito);

        $result->execute();

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

    public function consultarRateProducto($cod_producto)
    {
        $sql = "SELECT * FROM rating_productos WHERE cod_producto = :cod_producto";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":cod_producto", $cod_producto);

        $result->execute();

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
}