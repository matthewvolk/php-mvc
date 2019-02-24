<?php

class Task {
  public $title;
  public $description;
  public $completed = false;

  public function __construct($title, $description) {
    $this->title = $title;
    $this->description = $description;
  }

  public function complete($isComplete) {
    $this->completed = $isComplete;
  }
}

$task = new Task('Go to the store', 'Go to the store to buy eggs and milk');
var_dump($task);
$task->complete(true);
var_dump($task);