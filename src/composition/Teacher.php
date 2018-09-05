<?php

namespace Oophp\Composition;

/**
 * Class Teacher.
 *
 * @package Oophp\Composition
 */
class Teacher {

  private $person;

  /**
   * Teacher constructor.
   *
   * @param \Oophp\Composition\Person $person
   *   Dependency injected person object.
   */
  public function __construct(Person $person) {
    $this->person = $person;
  }

  /**
   * The teacher's specialist subject.
   *
   * @param string $subject
   *   The subject the teacher teaches.
   *
   * @return string
   *   The teacher subject message.
   */
  public function teach(string $subject): string {
    return "Teaching: " . $subject;
  }

  /**
   * Get the teacher's house.
   */
  public function getHouse(): string {
    $this->person->getHouse();
  }

}
