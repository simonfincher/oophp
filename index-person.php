<?php

/**
 * @file
 * index-person.php
 */

require_once './vendor/autoload.php';

use Oophp\ChapterTwo\Person;

$bob = new Person("Bob");

echo $bob . PHP_EOL;
