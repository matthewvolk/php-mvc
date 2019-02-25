<?php

namespace MJVolk;

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