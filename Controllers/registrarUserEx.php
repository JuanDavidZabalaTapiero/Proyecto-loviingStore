<?php
require_once ('../Models/consultasUser.php');

$data = [
    'secret' => 'ES_2eb194c7cfef46f6ad86c990a901ff0b',
    'response' => $_POST['h-captcha-response']
];

$verify = curl_init();

curl_setopt($verify, CURLOPT_URL, "https://hcaptcha.com/siteverify");
curl_setopt($verify, CURLOPT_POST, true); 
curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($verify);
$responseData = json_decode($response);

if ($responseData->success) {

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
} else {
    echo "
    <script>
        alert('Captcha Invalido');
        location.href='../Views/Extras/crearCuenta.html';
    </script>
    ";
}



?>



