<?php
// Multiple Traits practice.

trait message{
  public function msg(){
    echo "OOP is Awesome";
  }
}

trait message2{
  public function msg2(){
    echo "OOP reduce Big jar of Code";
  }
}

// class define
class test{
  use message;
}
class test2{
  use message2;
}

// object define
$obj = new test();
$obj2 = new test2();

// output in the screen.
$obj->msg();
echo "\n";
$obj2->msg2();

?>