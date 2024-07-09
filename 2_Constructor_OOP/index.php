<?php

//  in this file we practice simple constructor OPP in PHP.

class Fruits{

  public $name, $color;

  function __construct($name){
    $this->name = $name;
  }

  function get_name(){
    return $this->name;
  }
}

$apple = new Fruits("Apple Fruits");
echo $apple->get_name();



?>