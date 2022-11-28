<?php

//Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

$name = $_GET['name'];
$age = $_GET['age'];
$email = $_GET['email'];



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

    <form action="index.php" method="get">
        <div>
            <label for="age">Age</label>
            <input type="number" name="age" id="age">
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="name">name</label>
            <input type="text" name="name" id="name">
        </div>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

    <?php if (strlen($name) > 3 && strpos($email, '.') && strpos($email, '@') && is_numeric($age)) :   ?>
        <h1>
            accesso riuscito
        </h1>
    <?php else :?>
        <h1>
            accesso negato
        </h1>
    <?php ?>    

</body>

</html>