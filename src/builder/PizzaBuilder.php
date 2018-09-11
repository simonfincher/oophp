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
   *
   * @return \Oophp\Builder\PizzaBuilder
   *   The instance of the pizza object.
   */
  public function addCheese(): PizzaBuilder {
    $this->extraCheese = TRUE;

    return $this;
  }

  /**
   * Sets the size of the pizza.
   *
   * @param int $size
   *   The size of the pizza.
   *
   * @return \Oophp\Builder\PizzaBuilder
   *   The instance of the pizza object.
   *
   * @throws \Exception
   */
  public function setSize(int $size): PizzaBuilder {

    if ($size < 7) {
      throw new \Exception('Pizza too small!');
    }

    $this->size = $size;

    return $this;
  }

  /**
   * Sets the type of sauce.
   *
   * @param string $sauce
   *   The type of sauce.
   *
   * @return \Oophp\Builder\PizzaBuilder
   *   The instance of the pizza object.
   */
  public function setSauce(string $sauce): PizzaBuilder {
    $this->sauce = $sauce;

    return $this;
  }

  /**
   * Gets the name of the pizza builder object's property.
   *
   * @param string $name
   *   The name of the pizza property given.
   *
   * @return string
   *   The value of the given pizza property.
   */
  public function __get($name) {
    return $this->$name;
  }

}
