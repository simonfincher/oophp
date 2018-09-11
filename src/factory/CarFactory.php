<?php

namespace Oophp\Factory;

/**
 * Class CarFactory.
 *
 * @package Oophp\Factory
 */
class CarFactory {

  /**
   * Logic for choosing type of car offered based on requirement for luxury.
   *
   * @param bool $luxury
   *   Defines what type of car will be returned.
   *
   * @return \Oophp\Factory\CarInterface
   *   The type of car (three or seven series).
   */
  public static function getCar(bool $luxury): CarInterface {

    if ($luxury === TRUE) {

      return new BmwSevenSeries();

    }

    return new BmwThreeSeries();

  }

}
