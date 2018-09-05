<?php

namespace Oophp\ChapterTwo;

/**
 * Class Lunch.
 *
 * @package Oophp\ChapterTwo
 */
class Lunch {

  private $main;
  private $dessert;

  /**
   * Lunch constructor.
   *
   * @param \Oophp\ChapterTwo\Food $main
   *   The main course.
   * @param \Oophp\ChapterTwo\Food $dessert
   *   The dessert course.
   */
  public function __construct(Food $main, Food $dessert) {
    $this->main = $main;
    $this->dessert = $dessert;
  }

  /**
   * Shows the available menu items.
   *
   * @return array
   *   The menu.
   */
  public function getMenu(): array {
    return [
      'main' => $this->main->getFood(),
      'dessert' => $this->dessert->getFood(),
    ];
  }

}
