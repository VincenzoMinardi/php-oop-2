<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>

<body>

</body>

</html>

<?php

include __DIR__ . '/products.php';

class Dog
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

$Dog = new Dog('Cane', 'Grande', 'Media');

var_dump($Dog);

class Cat
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

$Cat = new Cat('Gatto', 'Media', 'Piccola');

var_dump($Cat);
