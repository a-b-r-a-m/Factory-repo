<?php

declare(strict_types=1);

namespace Loginner\FakatRepo;

class Router
{
    private array $routes;

    public function addRoute(string $method, string $url, callable|array $action): self // : Route //static
    {
        $this->routes[$method][$url] = $action;

        return $this;
        //        return 'Route created';
        //        return new Route($url, $method, $callback);
    }

    public function get(string $url, callable|array $action): self
    {
        return $this->addRoute('get', $url, $action);
    }

    public function post(string $url, callable|array $action): self
    {
        return $this->addRoute('post', $url, $action);
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }

    public function resolveRoute(string $url, string $method) //: Response //static //string $method
    {
        $route = explode('?', $url)[0];
        $action = $this->routes[$method][$route] ?? null;

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
                    var_dump('Route-Method combo exists True', $class, $method);
                    return call_user_func_array([$class, $method], []);
                }
            }
        }

        throw new RouteNotFoundException();
        //        return 'Route resolved, here\'s a Response';
        //        return new Response();
    }
}
