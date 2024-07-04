<?php

// practice sum & subtraction using OOP.
// in this class OOP we don't use setter-getter method we use return in the same function. 
class calculation{

public $a, $b, $c;

function sum(){
  $this->c = $this->a + $this->b;
  return $this->c;
}

function substr(){
  $this->c = $this->a - $this->b;
  return $this->c;

 }
}

$c1 = new calculation();
$c1->a = 10;
$c1->b = 20;

echo $c1->sum();

