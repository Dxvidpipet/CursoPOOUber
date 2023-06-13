<?php

require_once('car.php');
require_once('account.php');
require_once('uberX.php');
require_once('uberPool.php');
require_once('uberVan.php');

$car = new Car("AW456", new Account("Andres Herrera", "AMS123"));
$car->printDataCar();

$uberX = new UberX("VBC258", new Account("Andrea Ferran", "AND765"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();

$uberPool = new UberPool("RT342", new Account("Carlos Martinez", "WER432"), "Renault", "Logan");
$uberPool->printDataCar();

$uberVan = new UberVan("OJL395", new Account("Raul Ramirez", "AND456"), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->printDataCar();
?>