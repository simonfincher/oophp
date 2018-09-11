<?php

/**
 * @file
 * index-json.php
 */

require_once './vendor/autoload.php';

use Oophp\Json\Json;
use Oophp\Json\Link;
use Oophp\Json\Text;

$data = new Json('src/json/blogs.json');
$text = new Text($data);

foreach ($text->getContent() as $content) {
  echo $content . PHP_EOL;
}

$link = new Link($data);

foreach ($link->getContent() as $content) {
  echo $content . PHP_EOL;
}
