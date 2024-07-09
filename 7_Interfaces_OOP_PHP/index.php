<?php
// interfaces practice in PHP
// Interfaces make it easy to use a variety of different classes in the same way.
//  All interface methods must be public

interface Animal {
  public function talk();
}

class Ranvir implements Animal{
  public function talk(){
    echo "Mera Baap ha";
  }
}

$d = new Ranvir();
$d->talk();


?>