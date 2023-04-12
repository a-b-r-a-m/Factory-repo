<?php

declare(strict_types=1);

namespace Loginner\FakatRepo;

function startRouter(): void
{
    $router = new Router();

    //$router->addRoute('/contact', function () {
    //    echo 'Contact route added - anon callback';
    //});
    //$router->addRoute('/products/create', [\Loginner\FakatRepo\Product::class, 'create']);

    $router
        ->get('/', [Home::class, 'index'])
        ->get('/products', [Product::class, 'index'])
        ->get('/products/create', [Product::class, 'create'])
        ->post('/products/create', [Product::class, 'store']);

    $uri = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD']; //strtolower()

    echo $uri . PHP_EOL . $method . PHP_EOL;

    $request = new Request();
    echo '<pre>';
    var_dump($request);
    echo '</pre>';
    //    echo $router->resolveRoute($uri, $method) . PHP_EOL;
    $router->resolveRoute($request) . PHP_EOL;
}
//                $virtualDay = new DateTime('6.2.2023.');
//                $deadline = new DateInterval('P90D');
//                var_dump($virtualDay->format('d/m/y'));
//                var_dump($deadline->d);
//                var_dump($virtualDay->add($deadline)->format('d/m/y'));
