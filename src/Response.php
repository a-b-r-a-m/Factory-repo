<?php

declare(strict_types=1);

namespace Loginner\FactorySpace;

class Response implements ResponseInterface
{
    public function __construct(private string $message, private string $status)
    {
    }

    public function send(): string
    {
        echo $this->message;
        return $this->status;
    }
}
