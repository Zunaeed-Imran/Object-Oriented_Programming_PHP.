<?php
// Practicing PHP namespace

class Table{
  public $title = "";
  public $numRow = 0;
  public function message(){
    echo "My {$this->title} has a {$this->numRow} row";
  }
}

$table = new Table();
$table->title = "Computer Table";
$table->numRow = 25;

$table->message();

?>