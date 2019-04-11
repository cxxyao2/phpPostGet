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
        return  $statement->fetchAll(PDO::FETCH_OBJ);
       
   
    }
    
    function updateJson($table, $parameters)
    {

      
        $statement = $this->pdo->prepare(" update {$table} set title = :title, body = :body where id=1");
        $statement->bindParam(':title' , $parameters[0]);
        $statement->bindParam(':body' , $parameters[1]);
        $exe = $statement->execute();
        //return json_encode($exe);
        return http_response_code();
       
        
    }
    function fetchJson($table, $parameters)
    {
        $statement = $this->pdo->prepare("select * from {$table} where id = :id");
        $statement->bindParam(':id' , $parameters[0]);
        $statement->execute();
        $objArray = $statement->fetchAll(PDO::FETCH_OBJ);
        // $str1 = '[';
        // foreach( $objArray as $obj1) {
        //     $str1 = $str1. json_encode($obj1) . ", ";
        // }
        // if (strlen($str1) > 0 && stripos($str1,", ") >= 0){
        //     $str1 = rtrim($str1, ", "); 
        // }
        // $str1 = $str1 . "]" ;
        return json_encode($objArray);
      
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