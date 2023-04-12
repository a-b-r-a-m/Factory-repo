<?php

declare(strict_types=1);

namespace Loginner\FactorySpace\Classes;

use Loginner\FactorySpace\Interfaces\ResponseInterface;

class Response implements ResponseInterface
{
    public function __construct(private string $message, private string $status)
    {
    }

    public function send(): string
    {
        return $this->message;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
