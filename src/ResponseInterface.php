<?php
declare(strict_types = 1);
namespace Loginner\FactorySpace;

interface ResponseInterface
{
    public function send(): string;
}