<?php

require_once (__DIR__ . '/../../Models/consultasCliente.php');

class EditarInfoCliente
{
    public $objConsultasCliente;

    public function __construct()
    {
        $this->objConsultasCliente = new ConsultasCliente();
    }

    public function editarInfoPersonal($num_documento, $nombre_usuario, $genero_cliente, $fecha_nacimiento_cliente, $tipo_doc_cliente, $img_perfil_cliente)
    {
        $this->objConsultasCliente->updateCliente($num_documento, $nombre_usuario, $genero_cliente, $fecha_nacimiento_cliente, $tipo_doc_cliente, $img_perfil_cliente);

        ?>
        <script>
            alert("Info personal actualizada :D");
            location.href = "../../Views/Cliente/user-profile.php";
        </script>
        <?php
    }
}