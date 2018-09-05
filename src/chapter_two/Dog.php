<?php

namespace Oophp\ChapterTwo;

/**
 * Class Dog.
 *
 * @package Oophp\ChapterTwo
 */
class Dog extends Mammal {

  private $talkCount = 0;

  /**
   * Make the dog speak.
   *
   * @return string
   *   The dog's response.
   */
  public function talk(): string {
    $this->talkCount++;
    return "Woof! I'm in Chapter two!";
  }

  /**
   * Getter for Bark counter.
   *
   * @return int
   *   The number of times the dog has barked.
   */
  public function getTalkCount(): int {
    return $this->talkCount;
  }

}
