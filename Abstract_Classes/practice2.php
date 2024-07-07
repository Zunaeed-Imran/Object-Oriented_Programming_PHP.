<?php
//  another practice of abstract class.



abstract class ParentClass
{
  abstract protected  function prefixName($name);
}

class ChildClass extends ParentClass
{
  public function prefixName($name)
  {
    if ($name == "john") {
      $preFix = "Mr.";
    } elseif ($name == "jane") {
      $preFix = "Mrs.";
    } else {
      $preFix = "";
    }
    return  "{$preFix} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("john");
echo "\n";
echo $class->prefixName("jane");


?>