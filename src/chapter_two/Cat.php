<?php

namespace Oophp\ChapterTwo;

/**
 * Class Cat.
 *
 * @package Oophp\ChapterTwo
 */
class Cat extends Mammal {

  /**
   * Make the cat speak.
   *
   * @return string
   *   The cat's response.
   */
  final public function talk(): string {
    return "Meow.";
  }

}
