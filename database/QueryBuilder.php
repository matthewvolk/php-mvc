<?php

class QueryBuilder {
  protected $pdo;

  public function __construct($pdo) {
    $this->pdo = $pdo;
  }

  public function selectAll($table, $intoClass) {
    $statement = $this->pdo->prepare("select * from $table");
    $statement->execute();
    
    /**
     * PDO::FETCH_CLASS allows you to save data into a class, 
     * so you can add methods and behavior to the class to modify the data. 
     */
    return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
  }
}
