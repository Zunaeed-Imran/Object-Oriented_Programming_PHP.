## OPP Practice (Object_Oriented_Programming)
- first we take a class with a name of the class
- than we take public variable in this class
- after that we take function 
- in function we use `$this->variable` 
- than out side class and out side function 
- we take a new variable `=  new  class_name()`
- than we give value of the public variable 
- than echo it by call out side variable name and function name `outside_variable->function_variable();`
- an example of function using sum of three number

  ```  
  <?php
      class calculation{
      public $a, $b, $c;
      function sum(){
        $this->c=$this->a+$this->b;
        return $this->c;
      }
      }
      $p = new calculation();
      $p->a = 10;
      $p->b = 20;

      echo $p->sum();
  ?>

  ```
- another example of OPP Using String

```
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

```
