<?php
class Router
{

    protected $routes = [];

    public function register($route, $controller, $action)
    {
        array_push($this->routes, ['route' => $route, 'controller' => $controller, 'action' => $action]);
    }

    public function dispatch($uri)
    {
        foreach ($this->routes as $route) {
            if ($uri == $route['route']) {
                $controller = new $route['controller']();
                $action = $route['action'];
                $controller->$action();
                return;
            }
        }
        echo "404";
    }
}
