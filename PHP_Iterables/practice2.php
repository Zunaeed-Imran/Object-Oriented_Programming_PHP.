<?php
// another practicing iterabel using function return.

function getItr():iterable{
  return ["a", "b", "c", "d"];
}

$myItr = getItr();
foreach($myItr as $item){
  echo $item;
}

?>