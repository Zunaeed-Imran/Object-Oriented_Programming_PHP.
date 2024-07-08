<?php
// interfaces practice in PHP


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