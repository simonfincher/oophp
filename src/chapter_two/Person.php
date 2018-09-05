<?php

namespace Oophp\ChapterTwo;

/**
 * Class Person.
 *
 * @package Oophp\ChapterTwo
 */
class Person {
  private $name;

  /**
   * Person constructor.
   *
   * @param string $name
   *   The person's name.
   */
  public function __construct(string $name) {
    $this->name = $name;
  }

  /**
   * Used to return a string if object is echoed.
   *
   * @return string
   *   Response including given name.
   */
  public function __toString(): string {
    return "Hello! My name is " . $this->name . ".";
  }

}
