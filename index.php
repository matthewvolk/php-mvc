<?php

use App\Core\Router;
use App\Core\Request;

require 'vendor/autoload.php';
require 'bootstrap.php';

Router::load('app/routes/routes.php')
  ->direct(Request::uri(), Request::method());
  