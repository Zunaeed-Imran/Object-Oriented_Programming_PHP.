<?php

// Practice another way, using set-get method.


class Car{

  public $name, $color;

  function set_spc($name){
    $this->name = $name;
  }
  function get_spc(){
    return $this->name;
  }
}

$odi = new Car;
$odi->set_spc("Odi car");

echo $odi->get_spc();

?>