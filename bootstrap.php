<?php

$app = [];

App::bind('database', new QueryBuilder(
  Connection::make()
));

function view($name, $data = []) {
  extract($data);

  return require "views/$name.phtml";
}

function redirect($path) {
  header("Location: /$path");
}