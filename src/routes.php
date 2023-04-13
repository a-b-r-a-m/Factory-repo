<?php

declare(strict_types=1);

namespace Loginner\FactorySpace;

use Loginner\FactorySpace\Classes\Home;
use Loginner\FactorySpace\Classes\Product;
use Loginner\FactorySpace\Classes\Router;

echo __FILE__ . '<br>';
echo __FUNCTION__ . '<br>';

Router
    ::get('/', [Home::class, 'index'])
    ::get('/products', [Product::class, 'index'])
    ::get('/products/create', [Product::class, 'create'])
    ::post('/products/create', [Product::class, 'store']);

echo '<pre>';
var_dump(Router::getRoutes());
echo '</pre>';


