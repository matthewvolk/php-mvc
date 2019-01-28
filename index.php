<?php

require 'bootstrap.php';

require Router::load('routes/routes.php')
  ->direct(Request::uri(), Request::method());
  