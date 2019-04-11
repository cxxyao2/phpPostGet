<?php

//$query = new QueryBuilder($database);

//$threads = $query->fetchPartData('threads', [$_REQUEST['id']]);
//$threads = $query->fetchAll('threads');
$strJson = $query->fetchJson('threads', [$_REQUEST['id']]);


require 'view/testGet.php';