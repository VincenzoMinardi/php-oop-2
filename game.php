<?php

class GamesDog
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

$gameDog = new GamesDog('Osso di gomma', 5, 99, 'Per Cani');


class GamesCat
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

$gameCat = new GamesCat('tiragraffi', 42.99, 'Per Gatto');
