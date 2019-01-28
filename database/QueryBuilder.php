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

  public function insert($table, $parameters) {

    $sql = sprintf(
      'insert into %s (%s) values (%s)',
      $table,
      implode(', ', array_keys($parameters)),
      ':' . implode(', :', array_keys($parameters))
    );

    try {
      $statement = $this->pdo->prepare($sql);
      $statement->execute($parameters);
    } catch (PDOException $e) {
      die($e);
    }
  }
}
