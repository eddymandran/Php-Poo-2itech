<?php

namespace M2i\Framework;

use M2i\Framework\DAO;

abstract class AbstractController
{
    protected $connection = null;

    public function __construct()
    {
        try {
            $this->connection = (new DAO)->getConnection();
        } catch (\PDOException $e) {
            dd($e);
        }
    }

    public function render($template, $data = [])
    {
        $loader =  new \Twig\Loader\FilesystemLoader('src/Resources/views');
        $twig = new \Twig\Environment($loader, [
            'cache' => 'var/cache',
            'debug' => true
        ]);

        return $twig->render($template, $data);
    }
}