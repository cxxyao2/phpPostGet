<?php

//$query = new QueryBuilder($database);

//$threads = $query->fetchPartData('threads', [$_REQUEST['id']]);
//$threads = $query->fetchAll('threads');


// ok $strJson = $query->updateJson('threads', [$_REQUEST['title'],$_REQUEST['body']]);


//require 'view/testGet.php';
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$title = $request->title;
$body =  $request->body;
//console.log($_REQUEST);
echo $postdata;
//echo '{"a":"b", "name":"mike"}';   // angular ok!!! a:'b', name:'mike'
//echo json_encode(var_dump($_REQUEST));