<?php

class HangmanDrawer {
  const FULL = "

            ================
              ||/         |
              ||          |
              ||
              ||
              ||
              ||
              ||
              ||
    ,,,,,,,,,,||,,,,,,,,,,,,,";

  public function draw($n) {
    $d = explode("\n", self::FULL);
    if($n > 0) {
      $d[5] = $d[5] . "         ( )";
    }
    if($n > 1) {
      $d[5] = str_replace("( )", "(\")", $d[5]);
    }
    if($n > 2) {
      $d[6] = $d[6] . "         \\";
    }
    if($n > 3) {
      $d[6] = $d[6] . "|";
    }
    if($n > 4) {
      $d[6] = $d[6] . "/";
    }
    if($n > 5) {
      $d[7] = $d[7] . "          |";
    }
    if($n > 6) {
      $d[8] = $d[8] . "        ,";
    }
    if($n > 7) {
      $d[8] = $d[8] . "/";
    }
    if($n > 8) {
      $d[8] = $d[8] . " \\";
    }
    if($n > 9) {
      $d[8] = $d[8] . ",";
    }
    echo join("\n", $d);
  }
}
