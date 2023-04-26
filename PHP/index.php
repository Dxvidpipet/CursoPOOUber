<?php

require_once('car.php');
require_once('account.php');
require_once('uberX.php');
require_once('uberPool.php');

$car = new Car("AW456", new Account("Andres Herrera", "AMS123"));
$car->printDataCar();

$uberX = new UberX("AW456", new Account("Andrea Ferran", "ANDA765"), "Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool("RT342", new Account("Carlos Martinez", "WER432"), "Renault", "Logan");
$uberPool->printDataCar();
?>