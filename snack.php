<?php

class snack
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


$snackDog = new Product('Barrette',  19.99, 'Per cani');

$snackCat = new Product('Biscotti', 15.99, 'Per Gatto');
