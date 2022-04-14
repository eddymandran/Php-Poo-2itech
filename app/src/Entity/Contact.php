<?php

namespace M2i\Poo\Entity;

use M2i\Framework\AbstractEntity;

class Contact extends AbstractEntity
{
    private $name;

    private $email;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}