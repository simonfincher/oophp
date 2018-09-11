<?php

namespace Oophp\Json;

/**
 * Interface ReaderInterface.
 *
 * @package Oophp\Json
 */
interface ReaderInterface {

  /**
   * Text or Link constructor.
   *
   * @param \Oophp\Json\Json $data
   *   The blogs JSON object.
   */
  public function __construct(Json $data);

  /**
   * Returns each entry of the text or Link blog type one at a time.
   *
   * @yield \Generator
   *   Each Link blog type entry is returned.
   */
  public function getContent(): \Generator;

}
