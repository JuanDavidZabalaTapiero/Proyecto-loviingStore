<?php
require_once ('conexionBd.php');
class ConsultasUser
{
    public function registrarUser($nombreUser, $generoUser, $fechaNacUser, $tipoDocUser, $numDocUser, $claveUser, $emailUser, $rolUser, $estadoUser, $fechaUser)
    {
        $sql = "SELECT * FROM tbl_usuarios WHERE num_documento = :numDocUser OR email_usuario = :emailUser";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":numDocUser", $numDocUser);
        $result->bindParam(":emailUser", $emailUser);

        $result->execute();

        $f = $result->fetch();

        if ($f) {
            echo '
            <script>
                alert("Su número de identificación o email ya están registrados");
                location.href="../Views/Extras/crearCuenta.html";
            </script>
            ';
        } else {
            $sql = "INSERT INTO tbl_usuarios(nombre_usuario, genero, fecha_nacimiento, tipo_documento, num_documento, email_usuario, clave_usuario, rol_usuario, estado_usuario, fecha_creacion) VALUES (:nombre, :genero, :fecha_nac, :tipo_doc, :num_doc, :email, :clave, :rol, :estado, :fecha)";

            $result = $conexion->prepare($sql);

            $result->bindParam(":nombre", $nombreUser);
            $result->bindParam(":genero", $generoUser);
            $result->bindParam(":fecha_nac", $fechaNacUser);
            $result->bindParam(":tipo_doc", $tipoDocUser);
            $result->bindParam(":num_doc", $numDocUser);
            $result->bindParam(":clave", $claveUser);
            $result->bindParam(":email", $emailUser);
            $result->bindParam(":rol", $rolUser);
            $result->bindParam(":estado", $estadoUser);
            $result->bindParam(":fecha", $fechaUser);

            $result->execute();

            echo '
            <script>
                alert("Registro exitoso");
                location.href="../Views/Extras/iniciarSesion.php";
            </script>
            ';
        }
    }
}