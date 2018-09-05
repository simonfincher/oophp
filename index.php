<?php

/**
 * @file
 * index.php
 */

require_once './vendor/autoload.php';

$oscar = new \Oophp\ChapterTwo\Dog();

for ($talk = 1; $talk <= 10; $talk++) {
  echo $oscar->talk() . ' ' . $oscar->getTalkCount() . PHP_EOL;
}

//echo $oscar->talk() . PHP_EOL;

//echo $oscar->talkCount . PHP_EOL;

$dogFood = new \Oophp\ChapterTwo\Food("Dog food");

echo $oscar->feed($dogFood) . "." . PHP_EOL;

echo "Dogs have " . \Oophp\ChapterTwo\Dog::legCount() . " legs." . PHP_EOL;

$whiskers = new \Oophp\ChapterTwo\Cat();

echo $whiskers->talk() . PHP_EOL;

$felix = new \Oophp\ChapterTwo\AegeanCat();

echo $felix->talk() . PHP_EOL;
