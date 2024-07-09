<?php
// Practicing Iterables
// it is loop through the input item.

function itFun(iterable $myIte){
  foreach($myIte as $item){
    echo $item;
  }
}

$arr = ["a", "b", "c"];

itFun($arr);

?>