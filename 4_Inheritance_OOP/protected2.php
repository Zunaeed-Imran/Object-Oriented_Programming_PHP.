<?php
// another protected function practice.
//  but this one will work because

// In the example above we see that all works fine! It is because we call the protected method (intro()) from inside the derived class.


class Fruits{
  public $name, $color;

  public function __construct($name, $color){
    $this->name = $name;
    $this->color = $color;
  }

  protected function intro(){
    echo "The Fruits is {$this->name} and the color is {$this->color}";
  }
}

// another class to extends class.
class Apple extends Fruits{
  public function message(){
    echo "am i food or Fruits";
  

    // output the into from extends class.
    $this->intro();
  }
}

$result = new Apple("Apple", "Red");

$result->message();


?>