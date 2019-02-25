<?php

namespace MJVolk;

class Staff {
  protected $members = [];

  public function __construct($members = []) {
    $this->members = $members;
  }

  public function add($person) {
    $this->members[] = $person;
  }

  public function listMembers() {
    foreach($this->members as $member) {
      var_dump($member);
    }
  }
}