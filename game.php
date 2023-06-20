<?php

class Games
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

$gameDog = new Games('Osso di gomma', 5, 99, 'Per Cani');

$gameCat = new Games('tiragraffi', 42.99, 'Per Gatto');
