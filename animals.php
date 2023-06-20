<?php

include __DIR__ . '/products.php';

class Animals
{
    public $species;
    public $size;
    public $type;

    public function __construct($species, $size, $type)
    {
        $this->species = $species;
        $this->size = $size;
        $this->type = $type;
    }
}
