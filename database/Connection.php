<?php

class Connection {

  public static function make() {
    try {
      require 'config/config.php'; // Exposes $DB_DSN, $DB_USER, $DB_PWD
      // DB Host needs to be 'mysql' b/c using docker https://github.com/laradock/laradock/issues/443
      return new PDO($DB_DSN, $DB_USER, $DB_PWD, $DB_PDO_OPTIONS);
    } catch (PDOException $e) {
        echo '<strong style="font-size:1.25rem;color:red;">Connection failed: </strong>' . $e->getMessage();
        die();
    }
  }
  
}

/**
 * Static Methods:
 * 
 * Without the 'static' keyword, you have to 
 * access the public function like:
 * 
 * $connection = new Connection();
 * $connection->make();
 * 
 * However, if you make the function static, 
 * you can access the function like:
 * 
 * Connection::make();
 */
