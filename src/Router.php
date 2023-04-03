<?php
declare(strict_types = 1);
namespace Loginner\FakatRepo;

class Router
{
    public function addRoute(Route $route) // string $url, string $method, callable $callback : Route
    {
        return 'Route created';
//        return new Route($url, $method, $callback);
    }

    public function resolveRoute(string $method): Response
    {
        return new Response();
    }
}