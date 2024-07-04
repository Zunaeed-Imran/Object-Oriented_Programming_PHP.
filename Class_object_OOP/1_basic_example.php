<?php
// basic example of class or OOP.
// we use setter & getter method using function and class.



class Fruits{

  public $name;
  public $color;


  function set_name($name){
    $this->name = $name;
  }

  function get_name(){
    return $this->name;
  }

}

$apple = new Fruits();
$banana = new Fruits();
$orange = new Fruits();

$apple->set_name('Apple');
$banana->set_name('Banana');
$orange->set_name('Orange');

echo $apple->get_name();
echo "</br>";
echo $banana->get_name();
echo "</br>";
echo $orange->get_name();


?>