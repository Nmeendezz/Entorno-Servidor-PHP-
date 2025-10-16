<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Ejercicio 1</h3>
    <?php
    $rows = 14 % 8 + 4;
    $columns = 13 % 6 + 5;

    //Primera figura
    echo "<code>";
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    echo "</code>";
    echo "<br>";

    //Segunda figura
    echo "<code>";
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $i; $j++) {
            if ($j < $columns) {
                echo "* ";
            }
        }
        echo "<br>";
    }
    echo "</code>";
    echo "<br>";

    //Tercera figura
    echo "<code>";
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
            if ($i == 0 || $i == $rows - 1 || $j == 0 || $j == $columns - 1) {
                echo "* ";
            } else {
                echo "&nbsp&nbsp";
            }
        }
        echo "<br>";
    }
    echo "</code>";
    echo "<br>";

    //Cuarta figura
    echo "<code>";
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
            if (($i + $j) % 2 == 0) {
                echo "* ";
            } else {
                echo "&nbsp&nbsp";
            }
        }
        echo "<br>";
    }
    echo "</code>";
    echo "<br>";
    ?>

    <h3>Ejercicio 2</h3>
    <?php

    $temps = [
        "Ciudad 1" => [
            "Dia 1 " => mt_rand(-10, 45),
            "Dia 2 " => mt_rand(-10, 45),
            "Dia 3 " => mt_rand(-10, 45),
            "Dia 4 " => mt_rand(-10, 45),
            "Dia 5 " => mt_rand(-10, 45),
            "Dia 6 " => mt_rand(-10, 45)
        ],
        "Ciudad 2" => [
            "Dia 1 " => mt_rand(-10, 45),
            "Dia 2 " => mt_rand(-10, 45),
            "Dia 3 " => mt_rand(-10, 45),
            "Dia 4 " => mt_rand(-10, 45),
            "Dia 5 " => mt_rand(-10, 45),
            "Dia 6 " => mt_rand(-10, 45)
        ],
        "Ciudad 3" => [
            "Dia 1 " => mt_rand(-10, 45),
            "Dia 2 " => mt_rand(-10, 45),
            "Dia 3 " => mt_rand(-10, 45),
            "Dia 4 " => mt_rand(-10, 45),
            "Dia 5 " => mt_rand(-10, 45),
            "Dia 6 " => mt_rand(-10, 45)
        ],
        "Ciudad 4" => [
            "Dia 1 " => mt_rand(-10, 45),
            "Dia 2 " => mt_rand(-10, 45),
            "Dia 3 " => mt_rand(-10, 45),
            "Dia 4 " => mt_rand(-10, 45),
            "Dia 5 " => mt_rand(-10, 45),
            "Dia 6 " => mt_rand(-10, 45)
        ],
        "Ciudad 5" => [
            "Dia 1 " => mt_rand(-10, 45),
            "Dia 2 " => mt_rand(-10, 45),
            "Dia 3 " => mt_rand(-10, 45),
            "Dia 4 " => mt_rand(-10, 45),
            "Dia 5 " => mt_rand(-10, 45),
            "Dia 6 " => mt_rand(-10, 45)
        ],
        "Ciudad 6" => [
            "Dia 1 " => mt_rand(-10, 45),
            "Dia 2 " => mt_rand(-10, 45),
            "Dia 3 " => mt_rand(-10, 45),
            "Dia 4 " => mt_rand(-10, 45),
            "Dia 5 " => mt_rand(-10, 45),
            "Dia 6 " => mt_rand(-10, 45)
        ],
    ];
    //Temperatura mas alta y baja
    
    $max = 0;
    foreach ($temps as $ciudad => $info) {
        foreach ($info as $dia => $temperatura) {
            if ($temperatura > $max) {
                $max = $temperatura;
            }
        }
    }
    echo $max;
    echo "<br>";

    $min = 0;
    foreach ($temps as $ciudad => $info) {
        foreach ($info as $dia => $temperatura) {
            if ($temperatura < $min) {
                $min = $temperatura;
            }
        }
    }
    echo $min;
    echo "<br>";

    //Dia con mayor variacion termica
    $diaMax = 0;
    foreach ($temps as $ciudad => $info) {
        var_dump($info[0]);
        for( $i = 0; $i < count($info); $dia++) {
            if($info[0] > $diaMax){
                $diaMax = $info;
            }
        }
    }
    ?>
</body>

</html>