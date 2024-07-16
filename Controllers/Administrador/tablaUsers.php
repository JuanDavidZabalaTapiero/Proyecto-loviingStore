<?php

require_once ('../../Models/consultasAdmin.php');

function tablaUsers()
{
    $objConsultasAdmin = new ConsultasAdmin();

    $tabla = $objConsultasAdmin->consultarUsers();

    if (!isset($tabla)) {
        echo '
        <h2>No hay usuarios registrados</h2>
        ';
    } else {
        foreach ($tabla as $f) {
            echo '
            <tr>
                <td><img src="../../Uploads/Usuarios/' . $f["foto_usuario"] . '" width="75px"></td>
                <td>' . $f["id_usuario"] . '</td>
                <td>' . $f["nombre_usuario"] . '</td>
                <td>' . $f["num_documento"] . '</td>
                <td>' . $f["email_usuario"] . '</td>
                <td>' . $f["rol_usuario"] . '</td>
                <td>' . $f["estado_usuario"] . '</td>
                <td><a href="" class="btn btn-primary">Ver</a></td>
                <td><a href="editarUser.php?idUser=' . $f["id_usuario"] . '"" class="btn btn-warning">Editar</a></td>
                <td><a href="../../Controllers/Administrador/eliminarUser.php?idUser=' . $f["id_usuario"] . '" class="btn btn-danger">Eliminar</a></td>
            </tr>
            ';
        }
    }
}