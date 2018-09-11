<?php

namespace Oophp\Json;

/**
 * Class Text.
 *
 * @package Oophp\Json
 */
class Text implements ReaderInterface {

  private $data;

  /**
   * Text constructor.
   *
   * @param \Oophp\Json\Json $data
   *   The blogs JSON object.
   */
  public function __construct(Json $data) {
    $this->data = $data;
  }

  /**
   * Returns each entry of the Text blog type one at a time.
   *
   * @yield \Generator
   *   Each Text blog type entry is returned.
   */
  public function getContent(): \Generator {
    $texts = $this->data->getDataByType('text');

    foreach ($texts as $text) {
      yield $text->text;
    }
  }

}
