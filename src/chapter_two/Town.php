<?php

namespace Oophp\ChapterTwo;

/**
 * Class Town.
 *
 * @package Oophp\ChapterTwo
 */
class Town implements RegionInterface {

  private $name;

  /**
   * Town constructor.
   *
   * @param string $name
   *   The name of the town.
   */
  public function __construct(string $name) {
    $this->name = $name;
  }

  /**
   * Categorises the given region.
   *
   * @return string
   *   Says that the named object is a town.
   */
  public function getInfo(): string {
    return $this->name . " is a town.";
  }

}
