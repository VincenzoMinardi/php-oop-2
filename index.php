<?php
include __DIR__ . '/animals.php';
include __DIR__ . '/snack.php';
include __DIR__ . '/Food.php';
include __DIR__ . '/kennels.php';
include __DIR__ . '/game.php';

$ArrProducts = [

    new Animals('Cane', 'Grande', 'Media', 'Gatto', 'Media', 'Piccola'),
    new Food('crocchette di manzo', '25.99', 'Per Cani', '15', 'crocchette di pesce', '15.99', 'Per Gatto', '5'),
    new Games('Osso di gomma', '5, 99', 'Per Cani', 'tiragraffi', '42.99', 'Per Gatto'),
    new Kennels('Casetta in legno', '100.59', 'Per Cani', 'Cuscino', '40.99', 'Per Gatto'),
    new Snack('Barrette',  '19.99', 'Per cani', '500', 'Biscotti', '15.99', 'Per Gatto', '350')
];
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negozio Di Animali</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Negozio di Animali</h1>
    <h2>Categoria Cani</h2>
    <?php
    foreach ($ArrProducts as $element) { ?>
        <div class="container dog">
            <div class="card">
                <img src="" alt="">
                <h3><?php echo $element->nameProduct ?></h3>
            </div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
        </div>
        <h2>Categoria Gatti</h2>
        <div class="container cat">
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
        </div>
    <?php } ?>

</body>

</html>