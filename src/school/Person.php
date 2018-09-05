<?php

namespace Oophp\School;

/**
 * Class Person.
 *
 * @package Oophp\School
 */
abstract class Person {

  protected $name;
  protected $house;

  /**
   * Person constructor.
   *
   * @param string $name
   *   Person's name (must be first and last names).
   * @param string $house
   *   Person's academic house.
   *
   * @throws \Exception
   */
  public function __construct(string $name, string $house) {

    if ($this->validateName($name) === FALSE) {
      throw new \Exception('Name must contain at least two segments.');
    }

    if ($this->validateHouse($house) === FALSE) {
      throw new \Exception('Invalid house.');
    }

    $this->name = $name;
    $this->house = $house;
  }

  /**
   * Check that the name contains at least two parts.
   *
   * @param string $name
   *   The person's submitted name.
   *
   * @return bool
   *   Whether the submitted name passes or fails validation.
   */
  private function validateName(string $name): bool {
    $nameSegments = explode(" ", $name);

    if (count($nameSegments) < 2) {
      return FALSE;
    }

    return TRUE;
  }

  /**
   * Check if a house is valid.
   *
   * @param string $house
   *   The given house.
   *
   * @return bool
   *   Whether the given house passes or fails validation.
   */
  private function validateHouse(string $house): bool {

    $validHouses = [
      'Griffindor',
      'Slytherin',
      'Hufflepuff',
      'Ravenclaw',
    ];

    if (in_array($house, $validHouses)) {
      return TRUE;
    }

    return FALSE;
  }

  /**
   * Gets a person's house.
   *
   * @return string
   *   The house name.
   */
  public function getHouse(): string {
    return $this->house;
  }

}
