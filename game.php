<?php

class Games extends Product
{
    public  $nameProduct;
    public   $price;
    public  $type;



    public function __construct($nameProduct, $price, $type)
    {
        parent::__construct($nameProduct, $price, $type);
    }
}
