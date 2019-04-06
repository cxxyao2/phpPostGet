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
        $statement ->execute();  //true, false
        return $statement->fetchAll(PDO::FETCH_CLASS);
        ////var_dump($statement->fetchAll(PDO::FETCH_OBJ));
    }


    function fetchPartData($table, $parameters)
    {
        $statement = $this->pdo->prepare("select * from {$table} where id = :id");
        $statement->bindParam(':id' , $parameters[0]);
        $statement ->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
        // $result->title
        ////var_dump($statement->fetchAll(PDO::FETCH_OBJ));
    }

    public function insert($table, $parameters)
    {
        //insert into table (col1, col2) values (val1, val2);
        $sql = sprintf('insert into %s (%s) values (%s)', 
            $table, 
            implode(',', array_keys($parameters)),
            ':'.implode(',:', array_keys($parameters)));
      

        try{
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
            return self::fetchAll($table);
        }catch(Exception $e){
            die($e->getMessage());

        }
    }

}