<?php

namespace Oophp\School;

/**
 * Class HeadTeacher.
 *
 * @package Oophp\School
 */
final class HeadTeacher extends Teacher {

  /**
   * Creates a rule with creation date.
   *
   * @param string $rule
   *   Name of the rule.
   *
   * @return string
   *   The rule with creation date.
   */
  public function createRule(string $rule): string {
    return date("Y-m-d h:i:sa") . ": " . $rule;
  }

}
