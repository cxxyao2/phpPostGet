<?php
  
    
    $database = require 'core/bootstrap.php';

    $router = Router::load('routes.php');





    $uri = trim($_SERVER['REQUEST_URI'], '/');  //'about/culture'

    require $router->direct($uri);
