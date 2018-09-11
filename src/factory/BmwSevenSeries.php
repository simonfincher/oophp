<?php

namespace Oophp\Factory;

/**
 * Class BmwSevenSeries.
 *
 * @package Oophp\Factory
 */
class BmwSevenSeries implements CarInterface {

  /**
   * The car's characteristic driving behaviour.
   *
   * @return string
   *   The defining characteristic of the 7 series.
   */
  public function drive(): string {
    return "Feel the luxury!";
  }

}
