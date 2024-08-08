<?php

require_once(__DIR__ . '/../Models/contact.php');

class ContactController
{
    public $objContact;

    public function __construct()
    {
        $this->objContact = new Contact();
    }

    public function sendMessage($nombre_user, $correo_user, $asunto_user, $mensaje_user)
    {
        $this->objContact->send_mail_contact($nombre_user, $correo_user, $asunto_user, $mensaje_user);
    }
}
