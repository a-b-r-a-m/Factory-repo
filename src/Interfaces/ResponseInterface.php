<?php
declare(strict_types = 1);
namespace Loginner\FactorySpace\Interfaces;

interface ResponseInterface
{
    public function send(): string;
}