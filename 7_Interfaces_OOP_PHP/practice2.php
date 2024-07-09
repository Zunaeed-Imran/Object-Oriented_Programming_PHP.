<?php
// practice take various animal in one main function for makeSound.


// interface defined
interface Animal2{
  public function makeSound();
}

// class defined
class Cat implements Animal2{
  public function makeSound(){
    echo "Meow";
  }
}
class Dog implements Animal2{
  public function makeSound(){
    echo "Bark";
  }
}
class Mouse implements Animal2{
  public function makeSound(){
    echo "Squez";
  }
}

// list of animal
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();

echo $cat->makeSound();
echo "\n";
echo $dog->makeSound();
echo "\n";
echo $mouse->makeSound();



?>