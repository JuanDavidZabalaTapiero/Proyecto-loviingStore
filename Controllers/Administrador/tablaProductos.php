<?php

require_once ('../../Models/consultasAdmin.php');

function tablaProductos()
{
    $objConsultasAdmin = new ConsultasAdmin();

    $tabla = $objConsultasAdmin->consultarProductos();

    if (!isset($tabla)) {
        echo '
        <h2>No hay productos registrados</h2>
        ';
    } else {
        foreach ($tabla as $f) {
            echo '

            <tr>
                <td><img src="../../Uploads/Productos/' . $f["foto1_producto"] . '" width="75px"></td>
                <td>' . $f["id_producto"] . '</td>
                <td>' . $f["nombre_producto"] . '</td>
                <td>' . $f["nombre_categoria"] . '</td>
                <td>' . $f["precio_producto"] . '</td>
                <td>' . $f["entradas"] . '</td>
                <td>' . $f["salidas"] . '</td>
                <td>' . $f["stock"] . '</td>

                <td><a href="" class="btn btn-primary">Ver</a></td>
                <td><a href="editarProducto.php?idProd=' . $f["id_producto"] . '" class="btn btn-warning">Editar</a></td>
                <td><a href="../../Controllers/Administrador/eliminarProducto.php?idProd=' . $f["id_producto"] . '" class="btn btn-danger">Eliminar</a></td>
            </tr>

            ';
        }
    }
}