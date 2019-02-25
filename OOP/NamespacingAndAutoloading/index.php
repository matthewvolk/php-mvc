<?php

/**
 * The "procedural way" of doing PHP:
 * 
 * require 'Person.php';
 * require 'Business.php';
 * require 'Staff.php';
 */

$matt = new Person("Matt V, Founder");
$jane = new Person("Jane Doe, Project Manager");

$codeLabsStaff = new Staff([$matt]);
$codeLabs = new Business($codeLabsStaff);

$codeLabs->hire($jane);

$codeLabs->getStaffMembers();