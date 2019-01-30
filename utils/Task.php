<?php

class Task {
  public $description;

  public function __construct($description) {
    $this->description = $description;
  }
}

$task = new Task('Go to the store');
var_dump($task->$description);