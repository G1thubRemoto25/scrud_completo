<?php
namespace App\Core;

class Router {
    private $routes = [];

    public function get($path, $controllerAction) {
        $this->routes['GET'][$path] = $controllerAction;
    }

    public function post($path, $controllerAction) {
        $this->routes['POST'][$path] = $controllerAction;
    }

    public function run() {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $path = str_replace('/proyecto-crud-completo/public', '', $path);

        if (isset($this->routes[$method][$path])) {
            [$controller, $action] = explode('@', $this->routes[$method][$path]);
            $controller = "App\\Controllers\\$controller";
            $obj = new $controller;
            $obj->$action();
        } else {
            echo "❌ Ruta no encontrada ($method $path)";
        }
    }
}
