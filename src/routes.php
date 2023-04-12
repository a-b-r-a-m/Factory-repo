<?php

declare(strict_types=1);

namespace Loginner\FactorySpace;

function startRouter(): void
{
    echo __FILE__ . '<br>';
    echo __FUNCTION__ . '<br>';

    $router = new Router();

    $router
        ->get('/', [Home::class, 'index'])
        ->get('/products', [Product::class, 'index'])
        ->get('/products/create', [Product::class, 'create'])
        ->post('/products/create', [Product::class, 'store']);

    $request = new Request();
    echo '<pre>';
    //    var_dump($request);
    var_dump($router->getRoutes());
    echo '</pre>';

    try {
        $router->resolveRoute($request);
    } catch (RouteNotFoundException $e) {
        echo $e->getMessage();
    }
}
