<?php

class Kennels
{
    public string $nameProduct;
    public int  $price;
    public string $type;



    public function __construct($nameProduct, $price, $type)
    {
        $this->nameProduct = $nameProduct;
        $this->price = $price;
        $this->type = $type;
    }
}

$kennelsDog = new Product('Casetta in legno', 100.59, 'Per Cani');

$kennelsCat = new Product('Cuscino', 40.99, 'Per Gatto');
