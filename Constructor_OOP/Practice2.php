<?php
// Practice Constructor 2 value practice.

class Fruits{

  public $name, $color;

  function __construct($name, $color){
    $this->name = $name;
    $this->color = $color;
  }

  function get_name(){
    return $this->name;
  }
  function get_color(){
    return $this->color;
  }
}

$apple = new Fruits("Apple Fruits", "Red Color");

echo $apple->get_name();
echo "\n";
echo $apple->get_color();


?>