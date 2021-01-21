<?php
require_once('Animal.php');
require_once('Frog.php');
require_once('Ape.php');
$animal= new Animal("onta");
  echo "nama Hewan :$animal->name <br>";
  echo "jumlah kaki: $animal->legs <br>";
  echo " darah :$animal->cold_blooded <br><br><br>";

  $frog= new Frog("Katak");
    echo "nama hewan :$frog->name <br>";
    echo "jumlah kaki :$frog->legs <br>";
    echo $frog->jump();
    echo "<br><br>";
    $ape= new Ape("orang hutan");
      echo "nama hewan :$ape->name <br>";
      echo "jumlah kaki :$ape->legs <br>";
      echo $ape->yell();



 ?>
