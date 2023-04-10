<?php
declare(strict_types = 1);
namespace Loginner\FakatRepo;

class Request implements RequestInterface
{
    public function __construct(string $route, string $method) //private iterable $parameters
    {
    }
}