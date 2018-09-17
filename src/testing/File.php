<?php

namespace Oophp\Testing;

/**
 * Class File.
 *
 * @package Oophp\Testing
 */
class File implements StorageInterface {

  private $path;

  /**
   * File constructor.
   *
   * @param string $path
   *   The path.
   *
   * @throws \Oophp\Testing\FileException
   */
  public function __construct(string $path) {

    if (file_exists($path) === FALSE) {
      throw new FileException('File does not exist.');
    }

    $this->path = $path;
  }

  /**
   * Stores contents.
   *
   * @param string $value
   *   Values to store.
   *
   * @return bool
   *   Values stored.
   */
  public function storeContents(string $value): bool {

    return file_put_contents($this->path, $value);
  }

  /**
   * Gets the stored contents.
   *
   * @return string
   *   The contents stored.
   *
   * @throws \Oophp\Testing\FileException
   */
  public function getContents(): string {

    $contents = file_get_contents($this->path);

    if ($contents === FALSE) {
      throw new FileException('Could not get contents (file may no longer exist.');
    }

    return $contents;
  }

}
