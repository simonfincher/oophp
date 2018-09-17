<?php

namespace Oophp\Testing;

class Json {

  private $storage;

  public function __construct(Storage $storage) {
    $this->storage = $storage;
  }

  public function store(\stdClass $object) {
    $json = json_encode($object);

    if ($json === FALSE) {
      throw new JsonException('Could not encode JSON.');
    }

    return $this->storage->storeContents($json);
  }

  public function retrieve(): \stdClass {
    $contents = $this->storage->getContents();

    if (empty($contents)) {
      return new \stdClass();
    }

    $data = json_decode($contents);

    if (json_last_error() > 0) {
      throw new JsonException('Could not decode JSON.');
    }

    return $data;
  }

}
