<?php

use Localize\Model\Infra\Persistence\Create;

require __DIR__ . '/vendor/autoload.php';

$createTables = new Create();
if($createTables->verificaDB() == false){
    $createTables->crateTables();
}

require __DIR__ . '/public/index.php';
?>