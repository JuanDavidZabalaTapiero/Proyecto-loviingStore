<?php

require_once ('../../Models/consultasAdmin.php');

function tablaVentas()
{
    $objConsultasAdmin = new ConsultasAdmin();

    $tabla = $objConsultasAdmin->consultarVentas();

    foreach ($tabla as $f) {
        echo '
        <tr>
            <td>' . $f["id_venta"] . '</td>
            <td>' . $f["nombre_producto"] . '</td>
            <td>' . $f["nombre_usuario"] . '</td>
            <td>' . $f["cantidad"] . '</td>
            <td>' . $f["fecha_venta"] . '</td>
            <td>' . $f["total"] . '</td>
            <td>' . $f["nombre_metodo"] . '</td>
            <td>' . $f["estado"] . '</td>

            <td><a href="" class="btn btn-primary">Ver</a></td>
            <td><a href="editarVenta.php?idVent='.$f["id_venta"].'" class="btn btn-warning">Editar</a></td>
            <td><a href="../../Controllers/Administrador/eliminarVenta.php?idVent='.$f["id_venta"].'" class="btn btn-danger">Eliminar</a></td>
        </tr>
        ';
    }
}