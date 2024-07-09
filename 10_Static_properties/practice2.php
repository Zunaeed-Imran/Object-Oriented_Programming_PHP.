<?php
// basic practice of static properties using

class pi{
  public static $value = 3.1416;
  public function valueFun(){
    return self::$value;
  }
}

$pi = new pi();
echo $pi->valueFun();


?>