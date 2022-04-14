<?php

require_once "vendor/autoload.php";

$connection = (new \M2i\Framework\DAO)->getConnection();

$connection->exec('CREATE TABLE IF NOT EXISTS migrations (`version` VARCHAR(255))');

$migrationFiles = scandir(__DIR__ . '/../../src/Migrations');
unset($migrationFiles[0]);
unset($migrationFiles[1]);

foreach ($migrationFiles as $migrationFile) {
    $className = str_replace('.php', '', $migrationFile);

    $query = $connection
                ->query("SELECT `version` FROM migrations WHERE `version`='$className'")
                ->fetch(PDO::FETCH_ASSOC)
                ;

    if ($query) continue; 

    $migration = new ('M2i\Poo\Migrations\\' . $className);
    $migration->up();

    $connection->exec("INSERT INTO migrations (`version`) value ('$className')");
}
