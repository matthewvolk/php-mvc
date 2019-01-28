<?php

require 'vendor/autoload.php';
require 'bootstrap.php';

Router::load('routes/routes.php')
  ->direct(Request::uri(), Request::method());
  