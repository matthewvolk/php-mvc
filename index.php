<?php

require 'Task.php';
require 'functions.php';

$pdo = connectToDb();

$statement = $pdo->prepare('select * from todos');
$statement->execute();

/**
 * PDO::FETCH_CLASS allows you to save data into a class, 
 * so you can add methods and behavior to the class to modify the data. 
 */
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

require 'view.phtml';