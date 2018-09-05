<?php

/**
 * @file
 * index-composition.php
 */

require_once './vendor/autoload.php';

use Oophp\Composition\Person;
use Oophp\Composition\Teacher;
use Oophp\Composition\HeadTeacher;

$person = new Person('Neville Longbottom', 'Griffindor');
$teacher = new Teacher($person);
$headTeacher = new HeadTeacher($teacher);

echo $headTeacher->createRule("Thou shalt not eat sweets in the corridors.");
echo PHP_EOL;
