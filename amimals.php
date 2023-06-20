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

class animalSpecies
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

class Product extends animalSpecies
{
}

$Dog = new animalSpecies('Cane', 'Grande', 'Bulldog');

var_dump($Dog);


$Cat = new animalSpecies('Catto', 'Piccola', 'Persiano');

var_dump($Cat);
