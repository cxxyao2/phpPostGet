<?php
    
    require 'Request.php';
    require 'vendor/autoload.php';
    
    $database = require 'core/bootstrap.php';
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $router = Router::load('routes.php');
    $query = new QueryBuilder($database);
  
 
    //$uri = trim($_SERVER['REQUEST_URI'], '/');  //'about/culture'
    require $router->direct(Request::uri(), Request::method());