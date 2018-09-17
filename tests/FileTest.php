<?php

use Oophp\Testing\File;
use Oophp\Testing\FileException;
use PHPUnit\Framework\TestCase;

class FileTest extends TestCase {

  public function testConstructor() {

    $fileLocation = tempnam(sys_get_temp_dir(), '');
    $fileExists = new File($fileLocation);
    $fileLocation = $fileLocation . 'NoExist';
    $this->expectException(FileException::class);
    $noExist = new File($fileLocation);
  }

  public function testStoreContents() {
    $fileLocation = tempnam(sys_get_temp_dir(), '');
    $store = new File($fileLocation);
    $stored = $store->storeContents('Hello, hello.');
    $this->assertEquals('Hello, hello.', file_get_contents($fileLocation));
    $this->assertEquals(TRUE, $stored);

    $stored = $store->storeContents('Welcome back.');
    $this->assertEquals('Welcome back.', file_get_contents($fileLocation));
    $this->assertEquals(TRUE, $stored);
  }

  public function testGetContents() {
    $fileLocation = tempnam(sys_get_temp_dir(), '');
    file_put_contents($fileLocation, 'Hello, hello.');
    $store = new File($fileLocation);
    $this->assertEquals('Hello, hello.', $store->getContents());
    file_put_contents($fileLocation, 'Welcome back.');
    $this->assertEquals('Welcome back.', $store->getContents());
  }

}
