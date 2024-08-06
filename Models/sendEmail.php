<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

require_once ('conexionBd.php');

class GenerarClave
{
    public function enviarClave($emailUser, $numIden)
    {
        $f = null;

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $consultarUser = "SELECT * FROM tbl_usuarios WHERE num_documento = :num_documento AND email_usuario = :email";

        $result = $conexion->prepare($consultarUser);

        $result->bindParam(":num_documento", $numIden);
        $result->bindParam(":email", $emailUser);

        $result->execute();

        $f = $result->fetch();

        if ($f) {
            // AHORA A GENERAR UNA CLAVE RANDOM

            $caracteres = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $longitud = 8;

            // PARA USER
            $newPass = substr(str_shuffle($caracteres), 0, $longitud);
            // PARA BD
            $passMd5 = md5($newPass);

            // ACTUALIZAR LA CONTRA DEL USER
            $actualizarClave = "UPDATE tbl_usuarios SET clave_usuario = :passMd5 WHERE num_documento = :num_documento";
            $result = $conexion->prepare($actualizarClave);

            $result->bindParam(":passMd5", $passMd5);
            $result->bindParam(":num_documento", $numIden);

            $result->execute();

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = 0;                                       //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host = 'smtp.gmail.com';                       //Set the SMTP server to send through
                $mail->SMTPAuth = true;                                   //Enable SMTP authentication
                $mail->Username = 'loviingstore753@gmail.com';            //SMTP username
                $mail->Password = 'xkzv fgqu nkqx uhso';                  //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                // Emisor
                $mail->setFrom('loviingstore753@gmail.com', 'Soporte Loviing Store');

                // Receptor
                $emailFor = $f["email_usuario"];
                $mail->addAddress($emailFor);          //Add a recipient

                // $mail->addAddress('ellen@example.com');               //Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true);                                     //Set email format to HTML
                $mail->CharSet = 'UTF-8';

                $mail->Subject = 'Nueva clave generada';

                $mail->Body = '
                <div style="font-family: Arial, sans-serif; color: #ca5d1e; max-width: 600px; margin: 0 auto;">
                    <h2>Recuperación de contraseña en Loviing Store</h2>
                    <p>Hola,</p>
                    <p>Has solicitado restablecer tu contraseña en Loviing Store. Aquí está tu nueva clave generada:</p>
                    <p><strong>Tu nueva clave generada: <span style="color: #ff6600;">'.$newPass.'</span></strong></p>

                    <p>Si no solicitaste este cambio, por favor ignora este mensaje.</p>
                    <p>Gracias,</p>
                    <p>El equipo de Loviing Store</p>
                </div>
                ';

                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo '
                <script>
                    alert("correo enviado")
                    location.href="../Views/Extras/iniciarSesion.php"
                </script>
                ';
            } catch (Exception $e) {
                echo "Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            // USUARIO NO ENCONTRADO >:C
            echo '
            <script>
                alert("El usuario no se encuentra en el sistema")
                location.href="../Views/Extras/iniciarSesion.php"
            </script>
            ';
        }
    }

    public function cambiarClave($numDoc, $claveActualHash, $claveNuevaHash, $claveNuevaVerificarHash){

        $consulta = "SELECT clave_usuario FROM tbl_usuarios WHERE num_documento = :numDoc";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($consulta);

        $result->bindParam(":numDoc", $numDoc);

        $result->execute();

        $f = $result->fetch();

        if($f['clave_usuario'] == $claveActualHash){
            if($claveActualHash == $claveNuevaHash){
                echo '
                <script>
                    alert("La contraseña ingresada ya esta registrada")
                    location.href="../../Views/Cliente/user-profile.php"
                </script>
                ';
            } elseif ($claveNuevaHash != $claveNuevaVerificarHash) {
                echo '
                <script>
                    alert("Las contraseñas ingresadas no coinciden")
                    location.href="../../Views/Cliente/user-profile.php"
                </script>
                ';
            } else{
                $sql = "UPDATE tbl_usuarios SET clave_usuario = :claveNueva WHERE num_documento = :numDoc";

                $result = $conexion->prepare($sql);
                $result->bindParam(":claveNueva", $claveNuevaHash);
                $result->bindParam(":numDoc", $numDoc);

                $result->execute();

                echo '
                <script>
                    alert("Contraseña actualizada correctamente :D")
                    location.href="../../Views/Cliente/user-profile.php"
                </script>
                ';
            }
        } else{
            echo '
            <script>
                alert("La contraseña actual ingresada es erronea")
                location.href="../../Views/Cliente/user-profile.php"
            </script>
            ';
        }

        // if ($contrasenaNueva != $contrasenaNuevaVerificar){
        //     echo '
        //     <script>
        //         alert("Las contraseñas no coinciden")
        //         location.href="../Views/Extras/iniciarSesi.php"
        //     </>
        //     ';
        // } elif($contrasenaActual == ){

        // }



        // $sql = "UPDATE tbl_usuarios SET clave_usuario = :contrasenaNuevaHash WHERE num_documento = :numDoc";





    }


    public function cambiarClaveAdmin($numDoc, $claveActualHash, $claveNuevaHash, $claveNuevaVerificarHash){

        $consulta = "SELECT clave_usuario FROM tbl_usuarios WHERE num_documento = :numDoc";

        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($consulta);

        $result->bindParam(":numDoc", $numDoc);

        $result->execute();

        $f = $result->fetch();

        if($f['clave_usuario'] == $claveActualHash){
            if($claveActualHash == $claveNuevaHash){
                echo '
                <script>
                    alert("La contraseña ingresada ya esta registrada")
                    location.href="../../Views/Administrador/userProfileAdmin.php"
                </script>
                ';
            } elseif ($claveNuevaHash != $claveNuevaVerificarHash) {
                echo '
                <script>
                    alert("Las contraseñas ingresadas no coinciden")
                    location.href="../../Views/Administrador/userProfileAdmin.php"
                </script>
                ';
            } else{
                $sql = "UPDATE tbl_usuarios SET clave_usuario = :claveNueva WHERE num_documento = :numDoc";

                $result = $conexion->prepare($sql);
                $result->bindParam(":claveNueva", $claveNuevaHash);
                $result->bindParam(":numDoc", $numDoc);

                $result->execute();

                echo '
                <script>
                    alert("Contraseña actualizada correctamente :D")
                    location.href="../../Views/Administrador/userProfileAdmin.php"
                </script>
                ';
            }
        } else{
            echo '
            <script>
                alert("La contraseña actual ingresada es erronea")
                location.href="../../Views/Administrador/userProfileAdmin.php"
            </script>
            ';
        }

    }

    public function cambiarCorreo($numDoc, $correoActual, $correoNuevo){


        $sql = "SELECT * FROM tbl_usuarios WHERE email_usuario = :correoNuevo";
        
        $objConexionBd = new ConexionBd();

        $conexion = $objConexionBd->getConexion();

        $result = $conexion->prepare($sql);

        $result->bindParam(":correoNuevo", $correoNuevo);

        $result->execute();

        $f = $result->fetch();

        if ($f) {
            echo '
            <script>
                alert("El email ingresado ya se encuentra registrado");
                location.href="../../Views/Cliente/user-profile.php";
            </script>
            ';
        }else {
            $sql = "UPDATE tbl_usuarios SET email_usuario = :correoNuevo WHERE num_documento = :numDoc";

                $result = $conexion->prepare($sql);
                $result->bindParam(":correoNuevo", $correoNuevo);
                $result->bindParam(":numDoc", $numDoc);
    
                $result->execute();
    
                echo '
                <script>
                    alert("Email actualizado correctamente :D")
                    location.href="../../Views/Cliente/user-profile.php"
                </script>
                ';
        }
        
    }
}

/*
⠑⡄⠀⠀⠀⠀⠀⠀ ⠀ ⣀⣀⣤⣤⣤⣀⡀
⠸⠿⡀⠀ ⠀ ⠀⣀⡴⢿⣿⣿⣿⣿⣿⣿⣿⣷⣦⡀
⠀⠀⠀⠀⠑⢄⣠⠾⠁⣀⣄⡈⠙⣿⣿⣿⣿⣿⣿⣿⣿⣆
⠀⠀⠀ ⢀⡀⠁⠀⠀⠈⠙⠛⠂⠈⣿⣿⣿⣿⣿⠿⡿⢿⣆
⠀⠀⠀⢀⡾⣁⣀⠀⠴⠂⠙⣗⡀⠀⢻⣿⣿⠭⢤⣴⣦⣤⣹⠀⠀⠀⢀⢴⣶⣆
⠀⠀⢀⣾⣿⣿⣷⣮⣽⣾⣿⣥⣴⣿⣿⡿⢂⠔⢚⡿⢿⣿⣦⣴⣾⠸⣼⡿
⠀⢀⡞⠁⠙⠻⠿⠟⠉⠀⠛⢹⣿⣿⣿⣿⣿⣌⢤⣼⣿⣾⣿⡟⠉
⠀⣾⣷⣶⠇⠀⠀⣤⣄⣀⡀⠈⠻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇
⠀⠉⠈⠉⠀⠀⢦⡈⢻⣿⣿⣿⣶⣶⣶⣶⣤⣽⡹⣿⣿⣿⣿⡇
⠀⠀⠀⠀⠀⠀⠀⠉⠲⣽⡻⢿⣿⣿⣿⣿⣿⣿⣷⣜⣿⣿⣿⡇
⠀⠀ ⠀⠀⠀⠀⠀⢸⣿⣿⣷⣶⣮⣭⣽⣿⣿⣿⣿⣿⣿⣿⠇
⠀⠀⠀⠀⠀⠀⣀⣀⣈⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠇
⠀⠀⠀⠀⠀⠀⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠑⡄
*/