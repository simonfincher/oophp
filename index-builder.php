<?php

/**
 * @file
 * index-builder.php
 */

require_once './vendor/autoload.php';

use Oophp\Builder\Pizza;
use Oophp\Builder\PizzaBuilder;

$builder = new PizzaBuilder('Margarita');
$builder->addCheese();
$builder->setSize(9);
$builder->setSauce('BBQ');

$pizza = new Pizza($builder);
echo $pizza->getLabel();
