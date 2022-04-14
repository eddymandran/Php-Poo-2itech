<?php

namespace M2i\Poo\Migrations;


use M2i\Framework\AbstractMigration;

class Migration202204130100 extends AbstractMigration
{
    public function up()
    {
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255), email VARCHAR(255)) Engine=InnoDB');

        $this->execute();
    }

    public function down()
    {
        $this->addSql('DROPT TABLE contact');

        $this->execute();
    }
}