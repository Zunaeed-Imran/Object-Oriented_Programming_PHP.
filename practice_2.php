<?php

class test_1_class {
  public $test_2_public;
  function test_2_function(){
    echo "This is " . $this->test_2_public;
  }
}
$test_2 = new test_1_class();
$test_2->test_2_public = "2nd Test Project";

echo $test_2->test_2_function();
?>