<?php
/*
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
*/

$randomNumbers = [];

while (count($randomNumbers) < 15) {
    $newNumber = rand(0, 100);

    if (!in_array($newNumber, $randomNumbers)) {
        $randomNumbers[] = $newNumber;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>

<body>
    <h1>Snack 3</h1>
    <ul>
        <?php for ($i = 0; $i < count($randomNumbers); $i++) { ?>
            <li><?= $randomNumbers[$i] ?></li>
        <?php } ?>
    </ul>
</body>

</html>