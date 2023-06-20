<?php

class Snack
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


$snackDog = new Snack('Barrette',  19.99, 'Per cani', 500);

$snackCat = new Snack('Biscotti', 15.99, 'Per Gatto', 350);
