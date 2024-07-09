<?php
//  Practice of a traits in OOP in PHP.
//  in this way don't have to echo after class define, because we echo in the function before.

trait message{
  public function msg(){
    echo "Alhamdullah i am learning";
  }
}

class learning{
  use message;
}

$obje = new learning();
$obje->msg();

?>