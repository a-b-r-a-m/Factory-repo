<?php

declare(strict_types=1);

namespace Loginner\FactorySpace\Classes;

class Product
{
    public function index(): Response
    {
        echo __METHOD__ . '<br>';

        return new Response('Response message from Product index()', '200');
    }

    public function create(): Response
    {
        echo __METHOD__ . '<br>';
        print_r(func_get_args()); //can send extra args in php

        return new Response('Response message from Product create()', '200');
    }

    public function store(): Response
    {
        echo __METHOD__ . '<br>';
        print_r(func_get_args());

        return new Response('Response message from Product store()', '200');
    }
}
