<?php

/**
 * @file
 * index-builder.php
 */

require_once './vendor/autoload.php';

use Oophp\Builder\PizzaBuilder;
use Oophp\Builder\Pizza;

$builder = new PizzaBuilder('Margarita');
$builder->addCheese();
$builder->setSize(9);
$builder->setSauce('BBQ');

$pizza = new Pizza($builder);
echo $pizza->getLabel() . PHP_EOL;

echo "Next order!" . PHP_EOL;

$builder = (new PizzaBuilder('Garlic mushroom'))
  ->addCheese()
  ->setSauce('Garlic')
  ->setSize(7);

$pizza = new Pizza($builder);
echo $pizza->getLabel() . PHP_EOL;
