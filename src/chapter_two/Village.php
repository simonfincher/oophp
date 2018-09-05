<?php

namespace Oophp\ChapterTwo;

/**
 * Class Village.
 *
 * @package Oophp\ChapterTwo
 */
class Village implements RegionInterface {

  private $name;

  /**
   * Village constructor.
   *
   * @param string $name
   *   The name of the village.
   */
  public function __construct(string $name) {
    $this->name = $name;
  }

  /**
   * Categorises the given region.
   *
   * @return string
   *   Says that the named object is a village.
   */
  public function getInfo(): string {
    return $this->name . " is a village.";
  }

}
