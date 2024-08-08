<?php

require_once (__DIR__ . '/contact.php');

$objContact = new Contact();

$objContact->send_mail_contact("User 1", "juandavidzabalatapiero@gmail.com", "Pregunta", "esto es un test siuu");