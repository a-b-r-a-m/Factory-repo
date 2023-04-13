<?php

declare(strict_types=1);

namespace Loginner\FactorySpace;

use Loginner\FactorySpace\Classes\Request;
use Loginner\FactorySpace\Classes\Router;
use Loginner\FactorySpace\Exceptions\RouteNotFoundException;

require_once realpath("vendor/autoload.php");
//require_once realpath('src/routes.php');

//echo '<pre>';
//print_r(get_defined_vars());
//echo '</pre>';

$request = new Request();

try {
    $response = Router::resolveRoute($request);
    echo '<br>' . $response->send() . '<br>';
    echo $response->getStatus();
} catch (RouteNotFoundException $e) {
    echo $e->getMessage();
}
