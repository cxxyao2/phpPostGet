<?php

	//get the posted data
	$postdata = file_get_content("php://input");

	if (!(isset($postdata) && !empty($postdata)))
	{
		return http_response_code(400);  //400 Bad Request
	}

	//validate
	$request = json_decode($postdata);
	if(trim($request->code === '') || $request->amount < 0 )
	{
		return http_response_code(400);  //400 Bad Request
	}
	
    $table = 'orders';
    $parameters = [
    'product_code' => $request->code,
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
		die($e->getMessage());

	}

	return http_response_code(500); //500 Internal Server Error