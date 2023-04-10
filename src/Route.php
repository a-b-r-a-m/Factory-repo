<?php
declare(strict_types=1);

namespace Loginner\FakatRepo;
class Route
{
    public function __construct(private string $url, private string $method, ?callable $callback = null)
    {
    }
}

//delete this file..