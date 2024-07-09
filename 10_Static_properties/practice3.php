<?php
// To call a static property from a child class, use the parent keyword inside the child class:
// we use 'parent' in return function.


class pi{
  public static $value = 3.1416;
}

class x extends pi{
  public function val(){
    return parent::$value;
  }
}

echo x::$value;
$x = new x();
echo $x->val();

?>