<?php

namespace Oophp\ChapterTwo;

/**
 * Interface MammalInterface.
 *
 * @package Oophp\ChapterTwo
 */
interface MammalInterface {

  /**
   * Make the mammal speak.
   *
   * @return string
   *   What the mammal says.
   */
  public function talk(): string;

  /**
   * Gives the mammal food and says what it is.
   *
   * @param \Oophp\ChapterTwo\Food $food
   *   The type of food given.
   *
   * @return string
   *   Says what the food was.
   */
  public function feed(Food $food): string;

  /**
   * How many legs has this mammal got?
   *
   * @return int
   *   The number of legs.
   */
  public static function legCount(): int;

}
