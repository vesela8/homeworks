<?php
include_once('Song.php');
  
  class SongAdapter {

    private $song;

    function __construct(Song $song_in) {
      $this->song = $song_in;
    }

    function getTitleAndSinger() {
    return $this->song->getTitle() . ' by ' . $this->song->getSinger();
    }

  }
?>
