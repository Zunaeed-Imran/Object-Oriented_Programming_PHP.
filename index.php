<?php

// simple and Basic OOP.
// we don't use setter getter function.
// also don't use return.
class person{

  public $name;

  function show(){
    echo "Your name is : ". $this->name;
  }
}

$p = new person();
$p->name = "Rifat";

echo $p->show();
?>