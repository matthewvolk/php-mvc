<?php

class Person {
  public $name;
  public $age;

  public function __construct($name) {
    $this->name = $name;
  }

  public function getAge() {
    return $this->age * 365;
  }

  public function setAge($age) {
    if ($age < 18) {
      throw new Exception("You must be 18 years or older");
    }

    $this->age = $age;
  }
}

$john = new Person("John");

/**
 * Why getters and setters?
 * Imagine, for example, that we wanted to implement some validation
 * that prevents users from being added to the DB is they are < 18 yrs old
 */
$john->setAge(24);
var_dump($john->getAge());