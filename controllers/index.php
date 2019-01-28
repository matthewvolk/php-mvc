<?php

require 'utils/functions.php';
require 'utils/Task.php';
require 'utils/Name.php';

$tasks = $app['database']->selectAll('todos', 'Task');
$users = $app['database']->selectAll('names', 'Name');
require 'views/index.phtml';