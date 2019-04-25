<?php

function getdata() {
 $orders = [];
 $database = require 'core/bootstrap.php';
 $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $statement = $database->prepare("select * from orders ");

 try{
    $statement->execute();
    $objArray = $statement->fetchAll(PDO::FETCH_OBJ);
    $i = 0;
    foreach ($objArray as $obj)
    {
        $orders[$i]['id'] = $obj->id;
        $orders[$i]['product_code'] = $obj->product_code;
        $orders[$i]['amount'] = $obj->amount;
        $i++;
   
    }
    // return json_encode($objArray);
   return  json_encode($orders);
  
 }
catch (PDOException $e) {
 //Do your error handling here
  return  $e->getMessage();
 //log error , not show on website
}

return http_response_code(422);  //Unprocessable Entity (WebDAV)
}

$strJson = getdata();
require 'view/testGet.php';