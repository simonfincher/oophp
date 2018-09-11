<?php

namespace Oophp\Json;

/**
 * Class Json.
 *
 * @package Oophp\Json
 */
class Json {

  private $data;

  /**
   * Json constructor.
   *
   * @param string $file
   *   The blog JSON file you want to read.
   */
  public function __construct(string $file) {
    $this->processFile($file);
  }

  /**
   * Reads in the blogs JSON file and reverses the content order (why reverse?).
   *
   * @param string $file
   *   The location of the blog JSON file.
   */
  private function processFile(string $file) {
    $contents = file_get_contents($file);
    $array = json_decode($contents);
    $arrayReverse = array_reverse($array);
    $this->data = $arrayReverse;
  }

  /**
   * Gets the contents of the blog JSON file from the Json object.
   *
   * @return array
   *   The blog JSON contents after being read in and reversed.
   */
  public function getData(): array {
    return $this->data;
  }

  /**
   * Gets the requested blog types. Either text or link in this exercise.
   *
   * @param string $type
   *   Which type of blog do you want? Text or link?
   *
   * @return array
   *   The required blog types.
   */
  public function getDataByType(string $type): array {
    $result = [];
    $data = $this->getData();

    foreach ($data as $entry) {
      if ($entry->type === $type) {
        array_push($result, $entry);
      }
    }
    return $result;
  }

}
