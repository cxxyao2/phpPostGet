<?php

function getdata(){

if ($_GET['id'] !== null && $_GET['id'] > 0)
{
    $id = $_GET['id'] ;
}
else
{
    return http_response_code(400);
}

$database = require 'core/bootstrap.php';
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//delete
try {
    $statement = $database->prepare(" delete from orders where id = :id");
    $statement->bindParam(':id' , $id);
    $statement->execute();  //true, false
    http_response_code(204); // no content
} catch (PDOException $e){
    http_response_code(422); // 422 Unprocessable Entity (WebDAV)
}


$strJson = getdata();
require 'view/testGet.php';