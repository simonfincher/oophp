<?php

namespace Oophp\School;

/**
 * Class Teacher.
 *
 * @package Oophp\School
 */
class Teacher extends Person {

  /**
   * The teacher's specialist subject.
   *
   * @param string $subject
   *   The subject the teacher teaches.
   *
   * @return string
   *   Gives the subject the teacher teaches message.
   */
  public function teach(string $subject): string {
    return "Teaching: " . $subject;
  }

}
