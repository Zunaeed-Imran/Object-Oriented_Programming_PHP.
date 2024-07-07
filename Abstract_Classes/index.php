<?php
//  example of abstract class in PHP OOP
// first we make a intro string, than make child class function.



// abstract class
abstract class Car{
  public $name;
  public function __construct($name){
    $this->name = $name;
  }
  abstract public function intro() : string;
}


// Child class
class Audi extends Car{
  public function intro(): string{
    return "This is 1st function of Audi Car";
  }
}
class BMW extends Car{
  public function intro(): string{
    return "This is 2nd function of BMW Car";
  }
}
class Cow extends Car{
  public function intro(): string{
    return "This is 3rd function of Cow Car";
  }
}

$audi = new Audi("Audi car");
echo $audi->intro();
echo "\n";

$bmw = new BMW("BMW Car");
echo $bmw->intro();
echo "\n";

$cow = new Cow("Cow Car");
echo $cow->intro();

?>