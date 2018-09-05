<?php

namespace Oophp\ChapterTwo;

/**
 * Class Food.
 *
 * @package Oophp\ChapterTwo
 */
class Food {
  private $food;

  /**
   * Food constructor.
   *
   * @param string $food
   *   The type of food being passed in.
   */
  public function __construct(string $food) {
    $this->food = $food;
  }

  /**
   * Gets the type of food the dog has been given.
   *
   * @return string
   *   What type of food is being returned.
   */
  public function getFood(): string {
    return $this->food;
  }

}
