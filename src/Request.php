<?php
declare(strict_types = 1);
namespace Loginner\FakatRepo;

class Request implements RequestInterface
{
    public function __construct(private iterable $parameters)
    {
    }
}