<?php

namespace Oophp\StructuralPatterns\Composite;

/**
 * Class Song.
 *
 * @package Oophp\StructuralPatterns\Composite
 */
class Song implements MusicInterface {
  private $name;

  /**
   * Song constructor.
   *
   * @param string $name
   *   The name of the song passed in.
   */
  public function __construct(string $name) {
    $this->name = $name;
  }

  /**
   * Returns the name of the playing song.
   *
   * @return string
   *   The song playing message.
   */
  public function play(): string {
    return "Playing song: " . $this->name . PHP_EOL;
  }

}
