<?php
include("funcionesNM.php");
include("alumnado.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulacro</title>
</head>

<body>
    <!--Ejercicio 1-->
    <h3>Ejercicio 1</h3>
    <?php

    $arr = [];
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            $arr[$i][$j] = $i * $j;
            echo $i * $j . " ";
        }
        echo "<br>";
    }
    var_dump($arr);
    ?>

    <!--Ejercicio 2-->
    <h3>Ejercicio 2</h3>
    <?php

    $arr = [];
    for ($i = 0; $i <= 3; $i++) {
        for ($j = 0; $j <= 3; $j++) {
            if ($i == $j) {
                $arr[$i][$j] = "si";
                echo "si ";
            } else {
                $arr[$i][$j] = "no";
                echo "no ";
            }
        }
        echo "<br>";
    }
    var_dump($arr);
    ?>

    <!--Ejercicio 3-->
    <h3>Ejercicio 3</h3>
    <?php

    $avg = promedio(2, 5, 6);
    echo $avg;
    echo "<br>";

    $avg = promedio();
    echo $avg;

    var_dump($avg);
    ?>

    <!--Ejercicio 4-->
    <h3>Ejercicio 4</h3>
    <?php

    $pot = potencia(4, 3);
    echo $pot;
    echo "<br>";

    $pot = potencia(4);
    echo $pot;
    echo "<br>";

    $pot = potencia(2, 8);
    echo $pot;
    echo "<br>";
    ?>

    <!--Ejercicio 5-->
    <h3>Ejercicio 5</h3>
    <?php
    $names = [
        1 => "Rida",
        2 => "Javi",
        3 => "Jesus"
    ];

    asort($names);
    echo "<ul>";
    foreach ($names as $key => $value) {
        echo "<li>$value tiene el ID $key</li>";
    }
    echo "</ul>";

    ?>

    <!--Ejercicio 6-->
    <h3>Ejercicio 6</h3>
    <?php
    $alumnos = $alumnado;

    //a
    foreach ($alumnos as $dni => $info) {
        if ("2345X" == $dni) {
            echo "<p>La edad de la alumna con el DNI $dni son" . $info["edad"] . " años</p>";
        }
    }
    echo "<hr>";

    //b
    echo "<ol>";
    foreach ($alumnos as $dni => $info) {
        if ($info["matricula"] == true) {
            echo "<li>" . $info["name"] . " si tiene matricula</li>";
        } else {
            echo "<li>" . $info["name"] . " no tiene matricula</li>";
        }
    }
    echo "</ol>";
    echo "<hr>";

    //c
    foreach ($alumnos as $dni => $info) {
        if ($info["edad"] >= 18) {
            echo $info["name"] . " tiene " . $info["edad"] . " y su DNI es $dni";
            echo "<br>";
        }
    }
    echo "<hr>";
    ?>
</body>

</html>