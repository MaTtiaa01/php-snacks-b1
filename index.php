<?php

$calenadario = [
    [
        'casa' => 'boston',
        'puntiCasa' => 80,
        'ospite' => 'cleveland',
        'puntiOspite' => 100
    ],
    [
        'casa' => 'golden state',
        'puntiCasa' => 110,
        'ospite' => 'toronto',
        'puntiOspite' => 100
    ],
    [
        'casa' => 'new york',
        'puntiCasa' => 120,
        'ospite' => 'indiana',
        'puntiOspite' => 119
    ],


];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Calendario</h1>

    <div>
        <?php foreach ($calenadario as $partita)
            $partita['casa'] . ':' . $partita['ospite'] . '|' . $partita['puntiCasa'] . '-' . $partita['puntiOspite'];
        ?>
    </div>

</body>

</html>