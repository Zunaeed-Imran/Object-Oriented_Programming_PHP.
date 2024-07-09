<?php
// another practice using self key.

class Greeting{
  public static function message(){
    echo "Hello all world people";
  }

  // take construct function to call by using "self" key 
  public function __construct(){
    self::message();
  }
}

// call the class.
new Greeting();

?>