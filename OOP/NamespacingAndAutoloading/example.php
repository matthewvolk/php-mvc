<?php

$matt = new MJVolk\Person("Matt V, Founder");
$jane = new MJVolk\Person("Jane Doe, Project Manager");

$codeLabsStaff = new MJVolk\Staff([$matt]);
$codeLabs = new MJVolk\Business($codeLabsStaff);

$codeLabs->hire($jane);

$codeLabs->getStaffMembers();