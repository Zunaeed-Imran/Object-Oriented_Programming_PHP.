<?php
// another practice of PHP Class Constants in PHP OOP
//  in this practice file we can access constant inside from the class by using "self" keyword.


class insideCall{
  const message = "call inside with function using self key...";

  public function callfun(){
    echo self::message;
  }
}

$result = new insideCall();
$result->callfun();


?>