<?php

function getdata() {
   
	$database = require 'core/bootstrap.php';
	$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$postdata = file_get_contents("php://input");
	
	file_put_contents("welcome.txt",'*add*id*'.json_encode($postdata).'*',FILE_APPEND | LOCK_EX);
	//get the posted data
	
	
	if (!(isset($postdata) && !empty($postdata)))
	{
		return http_response_code(400);  //400 Bad Request
	}

	//validate
	$request = json_decode($postdata);

	if(trim($request->product_code === '') || $request->amount < 0 )
	{
		return http_response_code(400);  //400 Bad Request
	}
	
    $table = 'orders';
    $parameters = [
    'product_code' => $request->product_code,
    'amount' => $request->amount
	];
	
	//insert into table (col1, col2) values (val1, val2);
	$sql = sprintf('insert into %s (%s) values (%s)', 
		$table, 
		implode(',', array_keys($parameters)),
		':'.implode(',:', array_keys($parameters)));

	try{
		$statement = $database->prepare($sql);
		$statement->execute($parameters);
		return http_response_code(201);//201 Created

	} catch(Exception $e) {
		return ($e->getMessage());

	}

	return http_response_code(500); //500 Internal Server Error
}
	
	
	$strJson = getdata();
	require 'view/testGet.php';