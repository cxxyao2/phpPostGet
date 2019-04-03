<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    function fetchAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement ->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
        ////var_dump($statement->fetchAll(PDO::FETCH_OBJ));
    }

}