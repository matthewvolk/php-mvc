<?php

$app = [];

$app['database'] = new QueryBuilder(
  Connection::make()
);
