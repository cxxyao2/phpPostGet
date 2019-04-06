<?php

//$query = new QueryBuilder($database);

$threads = $query->fetchPartData('threads', [$_REQUEST['id']]);

require 'view/index.view.php';