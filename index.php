<?php

require './utils/functions.php';
require './utils/Task.php';

$query = require 'bootstrap.php';
$tasks = $query->selectAll('todos', 'Task');

require 'view.phtml';
