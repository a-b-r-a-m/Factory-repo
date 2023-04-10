<?php

namespace Loginner\FakatRepo;

class RouteNotFoundException extends \Exception
{
    protected $message = '404 Not Found';
}