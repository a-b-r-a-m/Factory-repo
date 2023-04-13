<?php

declare(strict_types=1);

namespace Loginner\FactorySpace\Classes;

use Loginner\FactorySpace\Exceptions\RouteNotFoundException;

class Router
{
    private static array $routes;

    public static function addRoute(string $method, string $url, callable|array $action): static
    {
        static::$routes[$method][$url] = $action;

        return new static();
    }

    public static function get(string $url, callable|array $action): static
    {
        return static::addRoute('GET', $url, $action); //self::
    }

    public static function post(string $url, callable|array $action): static
    {
        return static::addRoute('POST', $url, $action);
    }

    public static function getRoutes(): array
    {
        return static::$routes;
    }

    /**
     * @throws RouteNotFoundException
     */
    public static function resolveRoute(Request $request): Response
    {
        echo __METHOD__ . '<br>';

        $route = $request->getRoute();
        $method = $request->getMethod();
        $parameters = $request->getParameters();

        $action = static::$routes[$method][$route] ?? null;

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
                    return call_user_func_array([$class, $method], [$parameters]);
                }
            }
        }
        throw new RouteNotFoundException();
    }
}
