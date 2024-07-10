<?php

class test_1{

  public $test_1_1;
  
    function test1_2(){
        echo "this is test " . $this->test_1_1;
    }
}

$test_1_3 = new test_1();
$test_1_3->test_1_1 = "Project_1";

echo $test_1_3->test1_2();
?>