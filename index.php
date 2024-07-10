<?php
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