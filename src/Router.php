<?php

declare(strict_types=1);

namespace Loginner\FakatRepo;

class Router
{
    private array $routes;

    public function addRoute(string $url, callable|array $action): self // string $method // : Route //static
    {
        $this->routes[$url] = $action;

        return $this;
//        return 'Route created';
//        return new Route($url, $method, $callback);
    }

    public function resolveRoute(string $url) //: Response //static //string $method
    {
        $route = explode('?', $url)[0];
        $action = $this->routes[$route] ?? null;

        if (!$action) {
            throw new RouteNotFoundException();
        }

        if (is_callable($action)) {
            return call_user_func($action);
        }

        if (is_array($action)) {
            [$class, $method] = $action;
            if (class_exists($class)) {
                $class = new $class();

                if (method_exists($class, $method)) {
                    var_dump('Method exists True',  $class, $method);
                    return call_user_func_array([$class, $method], []);
                }
            }
        }

        throw new RouteNotFoundException();
//        return 'Route resolved, here\'s a Response';
//        return new Response();
    }
}