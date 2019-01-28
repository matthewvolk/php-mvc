<?php

require 'utils/functions.php';
require 'utils/Task.php';

$tasks = $app['database']->selectAll('todos', 'Task');
require 'views/index.phtml';