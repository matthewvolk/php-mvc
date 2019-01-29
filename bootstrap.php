<?php

use App\Core\App;

App::bind('database', new QueryBuilder(
  Connection::make()
));

function view($name, $data = []) {
  extract($data);

  return require "app/views/$name.phtml";
}

function redirect($path) {
  header("Location: /$path");
}
