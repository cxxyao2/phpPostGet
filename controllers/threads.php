<?php

//$query = new QueryBuilder($database);
$tasks = $query -> fetchAll('threds');

require 'view/index.view.php';