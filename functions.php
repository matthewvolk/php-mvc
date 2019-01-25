<?php

function connectToDb() {
  try {
    require 'env.php'; // Exposes $DB_DSN, $DB_USER, $DB_PWD
    // DB Host needs to be 'mysql' b/c using docker https://github.com/laradock/laradock/issues/443
    return new PDO($DB_DSN, $DB_USER, $DB_PWD);
  } catch (PDOException $e) {
      echo '<strong style="font-size:1.25rem;color:red;">Connection failed: </strong>' . $e->getMessage();
      die();
  }
};
