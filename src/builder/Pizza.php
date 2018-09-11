<?php

namespace Oophp\Builder;

/**
 * Class Pizza.
 *
 * @package Oophp\Builder
 */
class Pizza {

  private $recipe;
  private $extraCheese;
  private $size;
  private $sauce;

  /**
   * Pizza constructor.
   *
   * @param \Oophp\Builder\PizzaBuilder $builder
   *   The pizza builder object.
   */
  public function __construct(PizzaBuilder $builder) {
    $this->recipe = $builder->recipe;
    $this->extraCheese = $builder->extraCheese;
    $this->size = $builder->size;
    $this->sauce = $builder->sauce;
  }

  /**
   * Gets the pizza label.
   *
   * @return string
   *   The pizza's label.
   */
  public function getLabel(): string {
    $cheese = $this->extraCheese ? " (with extra cheese)" : "";

    return $this->recipe . $cheese . " pizza with " . $this->sauce .
      " sauce. Diameter (inches): " . $this->size;
  }

}
