<?php

namespace Oophp\ChapterTwo;

/**
 * Class AegeanCat.
 *
 * The Aegean cat makes a different sound than the regular cat, so it has its
 * own class that extends the regular cat class and overrides the talk() method.
 *
 * @package Oophp\ChapterTwo
 */
class AegeanCat extends Cat {

  /**
   * Make the Aegean cat speak.
   *
   * @return string
   *   The cat's response.
   */
  public function talk(): string {
    return "Meeeooowww.";
  }

}
