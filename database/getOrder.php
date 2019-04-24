<?php
try{
    $statement = $database->prepare("select * from orders where id = :id");
    $statement->bindParam(':id' , $parameters[0]);
    $statement->execute();
    $objArray = $statement->fetch(PDO::FETCH_OBJ);
    return json_encode($objArray);
}
catch (PDOException $e) {
    $message = $e->getMessage();
    //log error , not show on website
}

return http_response_code(422);  //Unprocessable Entity (WebDAV)

