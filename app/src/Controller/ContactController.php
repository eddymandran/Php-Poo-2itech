<?php

namespace M2i\Poo\Controller;


use M2i\Framework\AbstractController;
use M2i\Poo\Entity\Contact;

class ContactController extends AbstractController
{
    public function index()
    {
        if (strtolower($_SERVER["REQUEST_METHOD"]) === 'post') {
            $contact = new Contact($_POST);
        }

        echo $this->render('contact.php', ["contact" => '']);
    }
}