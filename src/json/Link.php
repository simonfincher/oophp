<?php

namespace Oophp\Json;

/**
 * Class Link.
 *
 * @package Oophp\Json
 */
class Link implements ReaderInterface {

  private $data;

  /**
   * Link constructor.
   *
   * @param \Oophp\Json\Json $data
   *   The blogs JSON object.
   */
  public function __construct(Json $data) {
    $this->data = $data;
  }

  /**
   * Returns each entry of the Link blog type one at a time.
   *
   * @yield \Generator
   *   Each Link blog type entry is returned.
   */
  public function getContent(): \Generator {
    $links = $this->data->getDataByType('link');

    foreach ($links as $link) {
      yield $link->text;
    }
  }

}
