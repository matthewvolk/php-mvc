<?php

$app = [];

require 'routes/Router.php';
require 'routes/Request.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
  Connection::make()
);
