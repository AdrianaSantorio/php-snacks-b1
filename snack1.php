<?php
/*
Snack 1
Passare come parametri GET name, mail e age
verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e 
che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/


$name = $_GET['name'] ?? '';

$mail = $_GET['mail'] ?? '';

$age = $_GET['age'] ?? '';

$nameIsValid = false;
$mailIsValid = false;
$ageIsValid = false;

if (!empty($name) && mb_strlen($name) > 3) {
    $nameIsValid = true;
}

if (!empty($mail) && str_contains($mail, '@') && str_contains($mail, '.')) {
    $mailIsValid = true;
}

if (!empty($age) && is_numeric($age) && mb_strlen($age) <= 3) {
    $ageIsValid = true;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <h1>Snack 1</h1>
    <?php if ($nameIsValid && $mailIsValid && $ageIsValid) { ?>
        <!-- success -->
        <h5>Accesso Riuscito</h5>
    <?php } else { ?>
        <!-- failure -->
        <h5>Accesso negato</h5>
    <?php } ?>

</body>

</html>