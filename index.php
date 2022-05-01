<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'SkateBoard.php';


$car = new Car('blue', 1, 'fuel');
echo $car->switchOn();
echo $car->switchOff();

$bike = new Bicycle('blue', 1);
echo $bike->switchOn();
$bike->forward();
echo $bike->switchOn();
echo $bike->switchOff();
