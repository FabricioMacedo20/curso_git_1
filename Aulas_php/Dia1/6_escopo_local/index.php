<?php
  
  $x = 10;

  echo "$x global <br>";

  function teste() {

    $x = 5;

    echo "$x <br>";

  }

  teste ();

  echo "$x global <br>";

  teste ();

  function testando() {

     $x = 12;

     echo "$x local 2 <br>";

  }

  testando ();

  teste();

  echo "$x global <br>";

