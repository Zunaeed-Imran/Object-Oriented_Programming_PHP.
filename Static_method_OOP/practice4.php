<?php
//  static method can call from other class 

class a{
  public static function message(){
    echo "Hello Static method Practice people";
  }
}

class b{
  public function welcome(){
    a::message();
  }
}

$obj = new b();
$obj->welcome();

?>