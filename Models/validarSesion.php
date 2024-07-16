<?php
require_once ('conexionBd.php');

class ValidarSesion
{
    public function iniciarSesion($emailUser, $claveUser)
    {
        $sql = "SELECT * FROM tbl_usuarios WHERE email_usuario = :emailUser";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":emailUser", $emailUser);

        $result->execute();

        $f = $result->fetch();

        if ($f) {
            if ($f["clave_usuario"] == $claveUser) {
                if ($f["estado_usuario"] == "Activo") {
                    session_start();
                    $_SESSION["idUser"] = $f["id_usuario"];
                    $_SESSION["emailUser"] = $f["email_usuario"];
                    $_SESSION["rolUser"] = $f["rol_usuario"];
                    $_SESSION["aut"] = "SI";

                    switch ($f["rol_usuario"]) {
                        case 'Cliente':
                            echo '
                            <script>
                                alert("Bienvenido Cliente");
                                location.href="../Views/Cliente/home.php";
                            </script>
                            ';
                            break;

                        case 'Administrador':
                            echo '
                            <script>
                                alert("Bienvenido Administrador");
                                location.href="../Views/Administrador/home.php";
                            </script>
                            ';
                            break;
                    }
                } else {
                    echo '
                    <script>
                        alert("El usuario está inactivo");
                        location.href="../Views/Extras/iniciarSesion.php";
                    </script>
                    ';
                }
            } else {
                echo '
                <script>
                    alert("El contraseña no está registrado");
                    location.href="../Views/Extras/iniciarSesion.php";
                </script>
                ';
            }
        } else {
            echo '
            <script>
                alert("El email no está registrado");
                location.href="../Views/Extras/iniciarSesion.php";
            </script>
            ';
        }
    }
}