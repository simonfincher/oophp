<?php

namespace Oophp\Factory;

/**
 * Class BmwThreeSeries.
 *
 * @package Oophp\Factory
 */
class BmwThreeSeries implements CarInterface {

  /**
   * The car's characteristic driving behaviour.
   *
   * @return string
   *   The defining characteristic of the 3 series.
   */
  public function drive(): string {
    return "Vroom vroom!";
  }

}
