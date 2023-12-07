<?php
class test_3{
  public $a, $b, $c;
  function test_fun(){
    $this->a = $this->b + $this->c;
    return $this->a;
  }
}

$a = new test_3();
$b = 10;
$c = 5;


echo $a->test_fun();
?>