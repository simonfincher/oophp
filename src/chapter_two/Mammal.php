<?php

namespace Oophp\ChapterTwo;

/**
 * Class Mammal.
 *
 * @package Oophp\ChapterTwo
 */
abstract class Mammal {

  private static $legCount = 4;

  /**
   * Make the mammal speak.
   *
   * @return string
   *   The mammal's response.
   */
  abstract public function talk(): string;

  /**
   * Gives the mammal food and says what it is.
   *
   * @param \Oophp\ChapterTwo\Food $food
   *   The type of food given.
   *
   * @return string
   *   Says what the food was.
   */
  public function feed(Food $food): string {
    return "Eaten: " . $food->getFood();
  }

  /**
   * How many legs has this mammal got?
   *
   * @return int
   *   The number of legs.
   */
  public static function legCount(): int {
    return self::$legCount;
  }

}
