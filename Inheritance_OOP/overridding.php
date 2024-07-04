<?php
//  in this methods (use the same name) in the child class.

class Fruits
{
  public $name, $color;

  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  public function intro()
  {
    echo "The fruit is {$this->name} and the color is {$this->color}";
  }
}


class Apple extends Fruits
{

  public $weight;
  public function __construct($name, $color, $weight)
  {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }

  public function intro()
  {
    echo "The fruit is {$this->name} and the color is {$this->color} and the weight is {$this->weight}";
  }
}

$result = new Apple("Apple", "Green", "20");
$result->intro();

?>