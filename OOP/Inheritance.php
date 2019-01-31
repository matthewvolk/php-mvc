<?php

/**
 * Abstract classes are classes that will never be
 * instantiated, but may hold methods & properties
 * that should be inherited amongst subclasses
 */
abstract class Human {
  protected $nationality;

  public function __construct($nationality) {
    $this->nationality = $nationality;
  }

  public function getNationality() {
    return $this->nationality;
  }
}

class Mother extends Human {
  public function getEyes() {
    return 2;
  }
}

class Child extends Mother {

}

$mother = new Mother("American");
var_dump($mother->getEyes());
var_dump($mother->getNationality());