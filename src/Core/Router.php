<?php

namespace App\Core;

class Router
{
    protected $routes = [];

    public function get($path, $action)
    {
        $this->routes['GET'][$path] = $action;
    }

    public function post($path, $action)
    {
        $this->routes['POST'][$path] = $action;
    }

    public function dispatch($uri, $method)
    {
        $path = parse_url($uri, PHP_URL_PATH);

        if (isset($this->routes[$method][$path])) {
            [$controller, $function] = $this->routes[$method][$path];
            $instance = new $controller();
            return call_user_func([$instance, $function]);
        }

        http_response_code(404);
        echo "404 Not Found";
    }
}
