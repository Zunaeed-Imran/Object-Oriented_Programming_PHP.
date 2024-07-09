<?php
// protected function use in OOP inheritance.
//  will show error



class Fruits
{
  public $name, $color;

  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  protected function intro()
  {
    echo "The fruit is {$this->name} and the color is {$this->color}";
  }
}

class Apple extends Fruits
{

  public function message()
  {
    echo "Am i Fruis or Food \n";
  }
}

$result = new Apple("Apple", "Red");
$result->message();
$result->intro();


?>