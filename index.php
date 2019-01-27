<?php

require 'Task.php';
require 'functions.php';

$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos', 'Task');

require 'view.phtml';
