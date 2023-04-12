<?php

declare(strict_types=1);

namespace Loginner\FactorySpace;

use Loginner\FactorySpace\Classes\Home;
use Loginner\FactorySpace\Classes\Product;
use Loginner\FactorySpace\Classes\Request;
use Loginner\FactorySpace\Classes\Router;
use Loginner\FactorySpace\Exceptions\RouteNotFoundException;

echo __FILE__ . '<br>';
echo __FUNCTION__ . '<br>';

$router = new Router();

$router
    ->get('/', [Home::class, 'index'])
    ->get('/products', [Product::class, 'index'])
    ->get('/products/create', [Product::class, 'create'])
    ->post('/products/create', [Product::class, 'store']);

echo '<pre>';
var_dump($router->getRoutes());
echo '</pre>';

$request = new Request();
try {
    $response = $router->resolveRoute($request);
    echo '<br>' . $response->send() . '<br>';
    echo $response->getStatus();
} catch (RouteNotFoundException $e) {
    echo $e->getMessage();
}

