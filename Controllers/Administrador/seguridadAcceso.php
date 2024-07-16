<?php

session_start();

if (!isset($_SESSION["aut"])) {
    echo '
    <script>
        alert("Por favor inicia sesión")
        location.href="../../Views/Extras/iniciarSesion.php";
    </script>
    ';
}

if ($_SESSION["rolUser"] != "Administrador") {
    echo '
    <script>
        alert("Tu rol no tiene permiso para entrar a esta página")
        location.href="../../Views/Extras/iniciarSesion.php";
    </script>
    ';
}