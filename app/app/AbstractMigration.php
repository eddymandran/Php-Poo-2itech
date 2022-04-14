<?php

namespace M2i\Framework;

use M2i\Framework\DAO;

abstract class AbstractMigration
{
    private $connection = null;

    private $queries = [];

    public function __construct()
    {
        $this->connection = (new DAO)->getConnection();
    }

    public function addSql($sql)
    {
        $this->queries[] = $sql;
    }

    public function execute()
    {
        foreach ($this->queries as $sql) {
            try {
                $this->connection->exec($sql);
            } catch (PDOException $e) {
                dd($e);
            }
        }
    }
}