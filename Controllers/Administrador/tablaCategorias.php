<?php

require_once ('../../Models/consultasAdmin.php');

function tablaCategorias()
{
    $objConsultasAdmin = new ConsultasAdmin();

    $tabla = $objConsultasAdmin->consultarCategorias();

    foreach ($tabla as $f) {
        echo '
        <tr>
            <td>' . $f["id_categoria"] . '</td>
            <td>' . $f["nombre_categoria"] . '</td>
            <td><a href="" class="btn btn-primary">Ver</a></td>
            <td><a href="editarCategoria.php?idCat=' . $f["id_categoria"] . '"" class="btn btn-warning">Editar</a></td>
            <td><a href="../../Controllers/Administrador/eliminarCategoria.php?idCat=' . $f["id_categoria"] . '" class="btn btn-danger">Eliminar</a></td>
        </tr>
        ';
    }
}