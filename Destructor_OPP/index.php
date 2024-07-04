<?php
// in Distruct function we echo.
//  Basic practice of Destructor in OOP.
//  A destructor is called when the script is stopped.

class Fruits{
  public $name, $color;
  function __construct($name){
    $this->name = $name;
  }
  function __destruct(){
    echo "the Fruit is {$this->name}";
  }
}
$apple = new Fruits("Apple");


?>