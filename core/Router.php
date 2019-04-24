<?php

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => [],
        'DELETE' => [],
        'PUT' => [],
        
    ];

    

    public static function load($files)
    {
        $router = new static;
        
        require $files;

        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }


    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function delete($uri, $controller)
    {
        $this->routes['DELETE'][$uri] = $controller;
    }


    public function put($uri, $controller)
    {
        $this->routes['PUT'][$uri] = $controller;
    }

  

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri, $requestType)
    {
       if (array_key_exists($uri, $this->routes[$requestType])) {
           return $this->routes[$requestType][$uri];
       }

       throw new Exception('NO route defined for this uri');
    }

}