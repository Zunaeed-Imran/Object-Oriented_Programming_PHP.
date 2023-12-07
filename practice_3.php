<?php
class practice3{
  public $test3;
  function prac3(){
    echo "This is " . $this->test3;
  }
}
$p = new practice3();
$p->test3 = "3rd Practice with string";

echo $p->prac3();

?>