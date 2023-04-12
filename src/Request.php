<?php

declare(strict_types=1);

namespace Loginner\FakatRepo;

class Request implements RequestInterface
{
    private string $method;
    private string $route;
    private array $parameters;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->route = explode('?', $_SERVER['REQUEST_URI'])[0];

        if ($this->method === 'GET') {
            $this->parameters = $_GET;
        } elseif ($this->method === 'POST') {
            $this->parameters = $_POST;
        }
        //       $this->parameters[] = "$_{$this->method}";

        //        $keyVals = explode('&', $_SERVER['QUERY_STRING']);
        //        foreach ($keyVals as $parameter) {
        //            $keyVals = explode('=', $parameter);
        //            $this->parameters[$keyVals[0]] = $keyVals[1];
        //        }
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
