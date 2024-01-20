<?php

declare(strict_types = 1);

namespace core;

class Router {

    private const DEFAULT_ACTION = 'index';
    private array $routes = [];

    public function __construct() {}

    public function get(string $uri, string|callable $handler, string $action = self::DEFAULT_ACTION): self {
        $this->register('GET', $uri, $handler, $action);
        return $this;
    }

    public function post(string $uri, string|callable $handler, string $action = self::DEFAULT_ACTION): self {
        $this->register('POST', $uri, $handler, $action);
        return $this;
    }

    public function init(): void {
        
        $reqUri = $_SERVER['REQUEST_URI'];
        $reqMethod = $_SERVER['REQUEST_METHOD'];

        foreach($this->routes[$reqMethod] as $route) {
            if($route['uri'] === $reqUri) {
                
                if(is_callable($route['handler'])) {
                    call_user_func($route['handler']);
                } else {
                    call_user_func([new $route['handler'](), $route['action']]);
                }

                exit();
            }
        }

        // 404
        echo '404';

    }

    private function register(string $method, string $uri, string|callable $handler, string $action): void {

        $this->routes[strtoupper($method)][] = [
            'uri' => $uri,
            'handler' => $handler,
            'action' => $action
        ];

    }

}