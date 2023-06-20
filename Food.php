<?php

class Food
{
    public string $nameProduct;
    public int  $price;
    public string $type;
    public int $weight;



    public function __construct($nameProduct, $price, $type, $weight)
    {
        $this->nameProduct = $nameProduct;
        $this->price = $price;
        $this->type = $type;
        $this->weight = $weight;
    }
}

$foodDog = new Food('crocchette di manzo', 25.99, 'Per Cani', 15);

$foodCat = new Food('crocchette di pesce', 15.99, 'Per Gatto', 5);
