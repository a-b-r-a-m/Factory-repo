<?php

declare(strict_types=1);

namespace Loginner\FakatRepo;

class Product
{
    public function index(): string
    {
        return 'Product index()';
    }

    public function create(): string
    {
        return '<form action="/products/create" method="post"><label>Amount</label><input type="text" name="amount"></form>';
        //        return 'Product create()';
    }

    public function store(): void
    {
        $amount = $_POST['amount'];

        var_dump($amount);
    }
}
