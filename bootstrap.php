<?php

$app = [];

require 'Router.php';
require 'Request.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
  Connection::make()
);
