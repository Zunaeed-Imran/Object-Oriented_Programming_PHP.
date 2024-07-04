<?php
// 
// As constructors and destructors helps reducing the amount of code, they are very useful!

class Fruits{
  public $name, $color;

  function __construct($name, $color){
    $this->name = $name;
    $this->color = $color;
  }

  function __destruct(){
    echo "Fruit is {$this->name} and the color of fruit is {$this->color}";
  }
}

$apple = new Fruits("Apple", "Red");

?>