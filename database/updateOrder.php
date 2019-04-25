<?php

function getdata() {
    
//Get the posted data 
$postdata = file_get_contents("php://input");
$database = require 'core/bootstrap.php';
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($postdata) && !empty($postdata)){
    //extract data
    //id product_code amount
    $request = json_decode($postdata);
    
    //validate
    if ( trim($request->amount) === '' ||(float)$request->amount < 0) {
        return http_response_code(400);  // 400 Bad Request
    }
  
    //update
    try {
        $statement = $database->prepare(" update orders set product_code = :code, amount = :amount where id=:id");
        $statement->bindParam(':id' , $request->id);
        $statement->bindParam(':code' , $request->product_code);
        $statement->bindParam(':amount' , $request->amount);
        $statement->execute();
        return http_response_code(204);  
    } catch (PDOException $e) {
        //Do your error handling here
         return  $e->getMessage();
        //log error , not show on website
    }

    return http_response_code(422);  //Unprocessable Entity (WebDAV)
}
}


$strJson = getdata();
require 'view/testGet.php';