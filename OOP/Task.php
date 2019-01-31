<?php

class Task {
  public $description;
  public $completed = false;

  public function __construct($description) {
    $this->description = $description;
  }

  public function complete($isComplete) {
    $this->completed = $isComplete;
  }
}

$task = new Task('Go to the store');
var_dump($task);
$task->complete(true);
var_dump($task);