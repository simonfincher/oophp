<?php

/**
 * @file
 * index-factory.php
 */

require_once './vendor/autoload.php';

use Oophp\Factory\CarFactory;

$car = CarFactory::getCar(TRUE);

echo $car->drive() . PHP_EOL;
