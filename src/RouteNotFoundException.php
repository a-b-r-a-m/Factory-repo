<?php

declare(strict_types=1);

namespace Loginner\FactorySpace;

class RouteNotFoundException extends \Exception
{
    protected $message = '404 Not Found';
}