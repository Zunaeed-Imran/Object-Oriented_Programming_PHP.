<?php
// Basic inharit practice in PHP OOP.
// The "Strawberry" class is inherited from the "Fruit" class.



// the father class
class Fruits{

  public $name, $color;

  public function __construct($name, $color){
    $this->name = $name;
    $this->color = $color;
  }

  public function intro(){
    echo "The Fruits is {$this->name}, and the color is {$this->color}";
  }
}

// take another class to inharit (উত্তরাধিকারী)

class Strawberry extends Fruits{
  public function message(){
    echo "Fruit or Berry \n";
  }
}

$berry = new Strawberry("Stwarberry", "Red");

$berry->message();
$berry->intro();

?>