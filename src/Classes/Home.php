<?php

declare(strict_types=1);

namespace Loginner\FactorySpace\Classes;

class Home
{
    public function index() : Response
    {
        echo __METHOD__ . '<br>';

        return new Response('Response message from Home index()', '200');
    }
}