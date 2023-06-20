<?php

class FoodDog
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

$foodDog = new FoodDog('crocchette di manzo', 25.99, 'Per Cani', 15);

class FoodCat
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

$foodCat = new FoodCat('crocchette di pesce', 15.99, 'Per Gatto', 5);
