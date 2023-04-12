<?php

declare(strict_types=1);

namespace Loginner\FactorySpace;

interface RequestInterface
{
    public function getMethod(): string;

    public function getRoute(): string;

    public function getParameters(): array;
}
