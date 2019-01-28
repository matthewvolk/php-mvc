<?php

require 'bootstrap.php';

require Router::load('routes.php')
  ->direct(Request::uri());
  