<?php

require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;

$factory = (new Factory)->withServiceAccount('Db.json')
->withDatabaseUri('https://test-46770-default-rtdb.asia-southeast1.firebasedatabase.app/');;

$database = $factory->createDatabase();
?>