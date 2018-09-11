<?php

namespace Oophp\Factory;

/**
 * Interface CarInterface.
 */
interface CarInterface {

  /**
   * The car's characteristic driving behaviour.
   *
   * @return string
   *   What driving this car is like.
   */
  public function drive(): string;

}
