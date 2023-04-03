<?php
declare(strict_types = 1);
namespace Loginner\FakatRepo;

interface ResponseInterface
{
    public function send(): string;
}