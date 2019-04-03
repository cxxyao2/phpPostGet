<?php

class Router
{
    protected $routes = [];

    public static function load($files)
    {
        $router = new static;
        
        require $files;

        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
       if (array_key_exists($uri, $this->routes)) {
           return $this->routes[$uri];
       }

       throw new Exception('NO route defined for this uri');
    }

}