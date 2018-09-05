<?php

namespace Oophp\ChapterTwo;

/**
 * Class City.
 *
 * @package Oophp\ChapterTwo
 */
class City implements RegionInterface {

  private $name;

  /**
   * City constructor.
   *
   * @param string $name
   *   The name of the city.
   */
  public function __construct(string $name) {
    $this->name = $name;
  }

  /**
   * Categorises the given region.
   *
   * @return string
   *   Says that the named object is a city.
   */
  public function getInfo(): string {
    return $this->name . " is a city.";
  }

}
