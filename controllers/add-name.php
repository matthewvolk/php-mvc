<?php

$app['database']->insert('names', [
  'name' => $_POST['name'],
]);

header('Location: /');