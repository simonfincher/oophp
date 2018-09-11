<?php

namespace Oophp\StructuralPatterns\Composite;

/**
 * Interface MusicInterface.
 *
 * @package Oophp\StructuralPatterns\Composite
 */
interface MusicInterface {

  /**
   * Returns the name of the playing song.
   *
   * @return string
   *   The name of the song playing.
   */
  public function play(): string;

}
