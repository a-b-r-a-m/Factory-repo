<?php

declare(strict_types=1);

namespace Loginner\FactorySpace;

class Product
{
    public function index(array $args): Response
    {
        var_dump($args);
        return new Response('Message from Product index()', 'HTTP_OK');
    }

    public function create(): string
    {
        return '<form action="/products/create" method="post"><label>Amount</label><input type="text" name="amount"></form>';
        //        return 'Product create()';
    }

    public function store(): void
    {
        $amount = $_POST['amount'];
        var_dump('Amount stored: ');
        var_dump($amount);
    }
}
