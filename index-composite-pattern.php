<?php

/**
 * @file
 * index-composite-pattern.php
 */

require_once './vendor/autoload.php';

use Oophp\StructuralPatterns\Composite\Song;
use Oophp\StructuralPatterns\Composite\Album;

$lostInStereo = new Song('Lost in Stereo');
$guts = new Song('Guts');
$helloBrooklyn = new Song('Hello, Brooklyn');
$poison = new Song('Poison');
$fences = new Song('Fences');

$album = new Album('Nothing Personal');
$album->addSong($lostInStereo);
$album->addSong($guts);
$album->addSong($helloBrooklyn);

echo $album->play();
echo $fences->play();
