<?php
//  static method can call it directly

class Name{
  public static function nameCall(){
    echo "Hello Programmer's";
  }
}

$obj = new Name();
$obj->nameCall();

?>