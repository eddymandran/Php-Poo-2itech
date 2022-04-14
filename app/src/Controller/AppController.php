<?php

namespace M2i\Poo\Controller;

use M2i\Framework\AbstractController;
use M2i\Poo\Entity\Contact;

class AppController extends AbstractController
{
    public function index()
    {
        echo $this->render('index.php', ["name" => "Khalid"]);
    }
}

/**
 * @todo Rajouter un conteneur MySQL:8.0.28-debian
 * @todo Faire un CRUD de notre contact
 */
