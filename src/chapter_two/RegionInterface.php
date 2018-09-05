<?php

namespace Oophp\ChapterTwo;

/**
 * Interface RegionInterface.
 */
interface RegionInterface {

  /**
   * RegionInterface constructor.
   *
   * @param string $name
   *   The name of the region.
   */
  public function __construct(string $name);

  /**
   * Categorises the given region.
   *
   * @return string
   *   Says what type of region the given name is.
   */
  public function getInfo(): string;

}
