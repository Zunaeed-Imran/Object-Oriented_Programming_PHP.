<?php
class test_3{
  public $a;
  function test_fun(){
    $this->a = "King-Arther";
    return $this->a;
  }
}

$b = new test_3();


echo $b->a;
?>