<?php

require_once ('../../Models/consultasAdmin.php');

function tablaProveedores()
{
    $objConsultasAdmin = new ConsultasAdmin();

    $tabla = $objConsultasAdmin->consultarProveedores();

    foreach ($tabla as $f) {
        echo '
        <tr>
            <td>' . $f["id_proveedor"] . '</td>
            <td>' . $f["nombre_empresa"] . '</td>
            <td>' . $f["representante_ventas"] . '</td>
            <td>' . $f["nombre_producto"] . '</td>
            <td>' . $f["correo_proveedor"] . '</td>
            <td>' . $f["tel_proveedor"] . '</td>
            <td>' . $f["direccion_fisica"] . '</td>

            <td><a href="" class="btn btn-primary">Ver</a></td>
            <td><a href="editarProveedor.php?idProv=' . $f["id_proveedor"] . '"" class="btn btn-warning">Editar</a></td>
            <td><a href="../../Controllers/Administrador/eliminarProveedor.php?idProv=' . $f["id_proveedor"] . '" class="btn btn-danger">Eliminar</a></td>
        </tr>
        ';
    }
}