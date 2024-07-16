<?php
require_once ('../Models/consultasUser.php');

$nombreUser = $_POST["nombreUser"];
$generoUser = $_POST["generoUser"];
$fechaNacUser = $_POST["fechaNacUser"];
$tipoDocUser = $_POST["tipoDocUser"];
$numDocUser = $_POST["numDocUser"];
$emailUser = $_POST["emailUser"];
$claveUser = $_POST["claveUser"];

$confirmarClaveUser = $_POST["confirmarClaveUser"];

if ($claveUser == $confirmarClaveUser) {
    $claveHash = md5($claveUser);

    $rolUser = "Cliente";

    $estadoUser = "Activo";

    $fechaUser = date('Y-m-d');

    $objConsultasUser = new ConsultasUser();

    $move = $objConsultasUser->registrarUser($nombreUser, $generoUser, $fechaNacUser, $tipoDocUser, $numDocUser, $claveHash, $emailUser, $rolUser, $estadoUser, $fechaUser);
} else {
    echo '
    <script>
        alert("Las contraseñas no coinciden");
        location.href="../Views/Extras/iniciarSesion.php";
    </script>
    ';
}