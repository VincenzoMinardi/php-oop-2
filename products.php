<?php

class Product
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


$foodDog = new Product('crocchette di manzo', 25.99, 'Per Cani');

$foodCat = new Product('crocchette di pesce', 15.99, 'Per Gatto');



$kennelsDog = new Product('Casetta in legno', 100.59, 'Per Cani');

$kennelsCat = new Product('Cuscino', 40.99, 'Per Gatto');


$gameDog = new Product('Osso di gomma', 5, 99, 'Per Cani');

$gameCat = new Product('tiragraffi', 42.99, 'Per Gatto');
