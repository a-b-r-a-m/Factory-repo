<?php

declare(strict_types=1);

namespace Loginner\FactorySpace\Classes;

use Loginner\FactorySpace\Interfaces\RequestInterface;

class Request implements RequestInterface
{
    private string $method;
    private string $route;
    private array $parameters;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->route = explode('?', $_SERVER['REQUEST_URI'])[0];

        $this->parameters['GET'] = $_GET;
        $this->parameters['POST'] = $_POST;

//        echo '<pre>'; var_dump($this); echo '<pre>';
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getRoute(): string
    {
        return $this->route;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }
}
