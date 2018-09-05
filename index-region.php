<?php

/**
 * @file
 * index-region.php
 */

require_once './vendor/autoload.php';

use Oophp\ChapterTwo\City;
use Oophp\ChapterTwo\Town;
use Oophp\ChapterTwo\Village;

$regions = [
  new City("London"),
  new Town("Rugby"),
  new City("New York"),
  new Village("Dunchurch"),
  new Town("Lutterworth"),
  new City("Baltimore"),
  new City("San Francisco"),
];

foreach ($regions as $region) {
  echo $region->getInfo() . PHP_EOL;
}
