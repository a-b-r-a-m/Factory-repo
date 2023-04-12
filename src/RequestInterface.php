<?php

declare(strict_types=1);

namespace Loginner\FakatRepo;

interface RequestInterface
{
    public function getMethod(): string;

    public function getRoute(): string;

    public function getParameters(): array;
}
