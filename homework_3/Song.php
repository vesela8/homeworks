<?php
class Song {

    private $title;
    private $singer;

    function __construct($title_in, $singer_in) {
      $this->title  = $title_in;
      $this->singer = $singer_in;
    }

    function getTitle() {return $this->title;}

    function getSinger() {return $this->singer;}

}
?>
