<?php

use PHPUnit\Framework\TestCase;
use Oophp\Testing\File;
use Oophp\Testing\Json;
use Oophp\Testing\JsonException;

class JsonTest extends TestCase {
  private $storage;

  protected function setUp() {
    $this->storage = $this->getMockBuilder(File::class)
      ->disableOriginalConstructor()
      ->getMock();
  }

  public function testStore() {
    $objectToStore = new stdClass();
    $objectToStore->data = "hello.";

    $this->storage
      ->expects($this->once())
      ->method('storeContents')
      ->with('{"data":"hello."}')
      ->willReturn(TRUE);

    $jsonStore = new Json($this->storage);
    $stored = $jsonStore->store($objectToStore);

    $this->assertTrue($stored);
  }

  public function testRetrieve() {
    $objectToRetrieve = new stdClass();
    $objectToRetrieve->data = "hello.";

    $this->storage
      ->expects($this->once())
      ->method('getContents')
      ->willReturn('{"data":"hello."}');

    $jsonRetrieve = new Json($this->storage);
    $retrieved = $jsonRetrieve->retrieve();

    $this->assertEquals($objectToRetrieve, $retrieved);
  }

  public function testRetrieveNoData() {
    $this->storage
      ->expects($this->once())
      ->method('getContents')
      ->willReturn('');

    $jsonRetrieve = new Json($this->storage);
    $retrieved = $jsonRetrieve->retrieve();

    $this->assertEquals(new stdClass(), $retrieved);
  }

  public function testRetrieveCorrupt() {
    $this->storage
      ->expects($this->once())
      ->method('getContents')
      ->willReturn('this is fake[ json]]]]]');

    $jsonRetrieve = new Json($this->storage);
    $this->expectException(JsonException::class);
    $jsonRetrieve->retrieve();
  }

}
