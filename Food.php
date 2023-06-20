<?php

class Food
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

$foodDog = new Product('crocchette di manzo', 25.99, 'Per Cani');

$foodCat = new Product('crocchette di pesce', 15.99, 'Per Gatto');
