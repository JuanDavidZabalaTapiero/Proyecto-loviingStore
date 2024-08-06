<?php

require __DIR__ . '/../PHPMailer/Exception.php';
require __DIR__ . '/../PHPMailer/PHPMailer.php';
require __DIR__ . '/../PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Contact
{
    public function send_mail_contact($nombre_user, $correo_user, $asunto_user, $mensaje_user)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                                       //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host = 'smtp.gmail.com';                             //Set the SMTP server to send through
            $mail->SMTPAuth = true;                                     //Enable SMTP authentication
            $mail->Username = 'loviingstore753@gmail.com';              //SMTP username
            $mail->Password = 'xkzv fgqu nkqx uhso';                    //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port = 465;                                          //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            // Emisor
            $mail->setFrom('loviingstore753@gmail.com', 'Sección de Contácto');

            // Receptor
            $mail->addAddress('loviingstore753@gmail.com');             //Add a recipient

            //Content
            $mail->isHTML(true);                                        //Set email format to HTML
            $mail->CharSet = 'UTF-8';

            $mail->Subject = $asunto_user;

            $mail->Body = '
            <p>Nombre del usuario: ' . $nombre_user . '</p>
            <p>Correo del usuario: ' . $correo_user . '</p>
            <h2>' . $asunto_user . '</h2>
            <p>' . $mensaje_user . '</p>
            ';

            $mail->send();
        } catch (Exception $e) {
            echo "Mailer Error: {$mail->ErrorInfo}";
        }
    }
}