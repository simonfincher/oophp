<?php

/**
 * @file
 * index-lunch.php
 */

require_once './vendor/autoload.php';

use Oophp\ChapterTwo\Food;
use Oophp\ChapterTwo\Lunch;

$tacos = new Food("Tacos");
$cake = new Food("Cake");

$lunch = new Lunch($tacos, $cake);

var_dump($lunch->getmenu());
