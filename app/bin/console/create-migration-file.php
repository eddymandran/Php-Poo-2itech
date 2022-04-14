<?php

$time = (new DateTime())->format('Ymdhi');
$fileName =  'Migration' . $time . '.php';

$content = <<<MFILE
<?php

namespace M2i\Poo\Migrations;


use M2i\Framework\AbstractMigration;

class Migration$time extends AbstractMigration
{
    public function up()
    {
        \$this->addSql('');

        \$this->execute();
    }

    public function down()
    {
        \$this->addSql('');

        \$this->execute();
    }
}
MFILE;

file_put_contents(__DIR__ . "/../../src/Migrations/$fileName", $content);
