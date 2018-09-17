<?php

namespace Oophp\Testing;

/**
 * Interface StorageInterface.
 *
 * @package Oophp\Testing
 */
interface StorageInterface {

  /**
   * StorageInterface constructor.
   *
   * @param string $path
   *   The path.
   */
  public function __construct(string $path);

  /**
   * Stores contents.
   *
   * @param string $value
   *   Values to store.
   *
   * @return bool
   *   Values stored.
   */
  public function storeContents(string $value): bool;

  /**
   * Gets the stored contents.
   *
   * @return string
   *   The contents stored.
   */
  public function getContents(): string;

}
