<?php

function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '</pre';
    
}

function fetchAllTasks($pdo)
{
    $statement =  $pdo->prepare('select * from users');
    $statement ->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS,'Task');
    ////var_dump($statement->fetchAll(PDO::FETCH_OBJ));
}

function connectDb()
{
    try{
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=test1','root','1234');
    } catch (PDOException $e ) {
        die('could ot connectds');
    }
    return $pdo;
}

// $pdo = PdoExt::getInstance($dsn, $username, $password);
// $sql = "SELECT user,host FROM mysql.user WHERE user = :user";
// $statement = $pdo->prepare($sql);

// $username = 'root';
// $statement->bindParam(':user', $username);
// $statement->execute();
