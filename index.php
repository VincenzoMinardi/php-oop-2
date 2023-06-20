<?php
include __DIR__ . '/animals.php';
include __DIR__ . '/snack.php';
include __DIR__ . '/Food.php';
include __DIR__ . '/kennels.php';
include __DIR__ . '/game.php';

$ArrProducts = [
    new Dog('Cane', 'Grande', 'Media'),

    new Cat('Gatto', 'Media', 'Piccola'),

    new FoodDog('crocchette di manzo', 25.99, 'Per Cani', 15),

    new FoodCat('crocchette di pesce', 15.99, 'Per Gatto', 5),

    new GamesDog('Osso di gomma', 5, 99, 'Per Cani'),

    new GamesCat('tiragraffi', 42.99, 'Per Gatto')
];


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

</body>

</html>