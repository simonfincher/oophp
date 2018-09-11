<?php

namespace Oophp\StructuralPatterns\Composite;

/**
 * Class Album.
 *
 * @package Oophp\StructuralPatterns\Composite
 */
class Album implements MusicInterface {

  private $name;
  private $songs = array();

  /**
   * Album constructor.
   *
   * @param string $name
   *   Album name.
   */
  public function __construct(string $name) {
    $this->name = $name;
  }

  /**
   * Adds songs to the album.
   *
   * @param \Oophp\StructuralPatterns\Composite\MusicInterface $song
   *   Song name.
   */
  public function addSong(MusicInterface $song) {
    array_push($this->songs, $song);
  }

  /**
   * Returns the name of the playing song.
   *
   * @return string
   *   The album playing message.
   */
  public function play(): string {
    $songNames = array();

    foreach ($this->songs as $song) {
      array_push($songNames, $song->play());
    }

    $songList = implode("", $songNames);

    return "Playing album: " . $this->name . PHP_EOL . $songList . PHP_EOL;
  }

}
