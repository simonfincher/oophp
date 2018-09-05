<?php

namespace Oophp\Composition;

/**
 * Class HeadTeacher.
 *
 * @package Oophp\Composition
 */
class HeadTeacher {

  private $teacher;

  /**
   * HeadTeacher constructor.
   *
   * @param \Oophp\Composition\Teacher $teacher
   *   Dependency injection of a teacher object.
   */
  public function __construct(Teacher $teacher) {
    $this->teacher = $teacher;
  }

  /**
   * Creates a rule with creation date.
   *
   * @param string $rule
   *   The name of the rule.
   *
   * @return string
   *   The rule with creation date.
   */
  public function createRule(string $rule): string {
    return date("Y-m-d h:i:sa") . ": " . $rule;
  }

  /**
   * Get the teacher's allocated academic house.
   */
  public function getHouse(): string {
    $this->person->getHouse();
  }

}
