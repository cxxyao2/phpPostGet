<?php

$query = new QueryBuilder($database);
$tasks = $query -> fetchAll('users');

require 'view/index.view.php';