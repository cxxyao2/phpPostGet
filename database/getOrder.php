<?php

function getdata() {
try{
    $database = require 'core/bootstrap.php';
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $database->prepare("select * from orders where id = :id");
    $statement->bindParam(':id' , $_GET['id']);
    $statement->execute();
    $objArray = $statement->fetch(PDO::FETCH_OBJ);
    return json_encode($objArray);
}
catch (PDOException $e) {
    return $e->getMessage();
    //log error , not show on website
}

return http_response_code(422);  //Unprocessable Entity (WebDAV)
}

$strJson = getdata();
require 'view/testGet.php';

