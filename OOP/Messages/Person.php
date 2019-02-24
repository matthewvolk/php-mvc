<?php

/**
 * Imagine a situation where you have a Person object 
 * who can be hired by a Business class to be added to
 * that business's Staff
 */

class Person {
  protected $name;

  public function __construct($name) {
    $this->name = $name;
  }
}

/**
 * Architecture: Should the business be responsible for keeping 
 * track of the person? 
 * 
 * Ask yourself: Should the business be responsible for handling and
 * tracking its staff? If yes, then shouldn't Staff belong to 
 * Business? This means, we need to provide a Staff when we create
 * a new business with a constructor
 */
class Business {
  protected $staff;

  /**
   * Every business has to have a staff, so Business class DEPENDS on Staff.
   * Every post has body content, so Post class DEPENDS on PostBody.
   * E.g.,
   * "How many dependencies does this object have?",
   * "Does this class have too many dependencies?", 
   * "Is this class tightly or loosely coupled with something else?"
   */
  // This function sends a 'message' to another class Staff
  public function __construct(Staff $staff) {
    $this->staff = $staff;
  }

  // Type hinting: function foo (ClassName $objectName) {}
  // This function sends a 'message' to another class Staff
  public function hire(Person $person) {
    $this->staff->add($person);
  }

  // This function sends a 'message' to another class Staff
  public function getStaffMembers() {
    $this->staff->listMembers();
  }
}

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

$matt = new Person("Matt V, Founder");
$jane = new Person("Jane Doe, Project Manager");

$codeLabsStaff = new Staff([$matt]);
$codeLabs = new Business($codeLabsStaff);

$codeLabs->hire($jane);

$codeLabs->getStaffMembers();
