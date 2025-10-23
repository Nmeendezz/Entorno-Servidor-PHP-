<?php
include("functions/functionsNM.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 2</title>
</head>

<body>
    <h3>Ejercicio 1</h3>
    <?php
    $parImpar = [];

    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if (($i + $j) % 2 == 0) {
                $parImpar[$i][$j] = "par, ";
                echo $parImpar[$i][$j];
            } else {
                $parImpar[$i][$j] = "impar, ";
                echo $parImpar[$i][$j];
            }
        }
        echo "<br>";
    }
    ?>

    <h3>Ejercicio 2</h3>
    <?php
    $stadistics = basicStadistics(1, 2, 3, -2, 9, -3);
    echo "<ul>";
    foreach ($stadistics as $name => $stad) {
        if ($name == "odd") {
            echo '<li>' . $name . ' = ' . implode(", ", $stad) . '</li>';
        } else {
            echo "<li>$name = $stad</li>";
        }

    }
    echo "</ul>";
    ?>

    <h3>Ejercicio 3</h3>
    <?php
    $numbers = [15, 6, 8.3, 4];

    echo implode(", ",operations($numbers));
    echo "<br>";
    echo implode(", ",operations($numbers, "order", false));
    echo "<br>";
    echo operations($numbers, "sum");
    echo "<br>";
    echo operations($numbers, "product", true);
    ?>

</body>

</html>