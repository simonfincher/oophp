<?php

namespace Oophp\Builder;

/**
 * Class PizzaBuilder.
 *
 * @package Oophp\Builder
 */
class PizzaBuilder {

  private $recipe;
  private $extraCheese;
  private $size;
  private $sauce;

  /**
   * PizzaBuilder constructor.
   *
   * @param string $recipe
   *   The pizza recipe.
   */
  public function __construct(string $recipe) {
    $this->recipe = $recipe;
    $this->extraCheese = FALSE;
    $this->size = 9;
    $this->sauce = "tomato";
  }

  /**
   * Adds extra cheese.
   */
  public function addCheese() {
    $this->extraCheese = TRUE;
  }

  /**
   * Sets the size of the pizza.
   *
   * @param int $size
   *   The size of the pizza.
   */
  public function setSize(int $size) {
    $this->size = $size;
  }

  /**
   * Sets the type of sauce.
   *
   * @param string $sauce
   *   The type of sauce.
   */
  public function setSauce(string $sauce) {
    $this->sauce = $sauce;
  }

  /**
   * Gets the name of the pizza.
   *
   * @param string $name
   *   The given name of the pizza.
   *
   * @return string
   *   The name of the pizza.
   */
  public function __get($name) {
    return $this->name;
  }

}
