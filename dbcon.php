<?php

// Refered this site --> https://firebase-php.readthedocs.io/en/5.x/

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

use Kreait\Firebase\Auth;

$factory = (new Factory)->withServiceAccount('DB\canteenmanagementsystem-2fc69-firebase-adminsdk-bx4sr-126fabb232.json');

$factory = (new Factory())->withDatabaseUri('https://canteenmanagementsystem-2fc69-default-rtdb.firebaseio.com/');


$database = $factory->createDatabase();
$auth = $factory->createAuth();

?>