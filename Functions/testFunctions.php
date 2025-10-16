<?php
include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>

<body>
    <?php
    echo salute("Nico");

    echo intohtml("Buen dia");

    echo matricula("Juan", "IES Enrique Tierno Galvan");


    ?>

    <h3>Parametros por valor o por referencia</h3>

    <?php
    function increment($number)
    {
        $number++;
        return $number;
    }
    $number = 8;

    echo increment($number);
    echo "<p>$number</p>";


    $edad = 17;
    $edad = addOne($edad);
    var_dump($edad);
    ?>

    <h3>Funciones con un numero variable de parametro</h3>

    <?php

    echo "uno " , "dos " , "tres";
    echo "<br>";

    $resta = subtract(4,3);
    var_dump($resta);
    echo "<br>";

    $text = concat("hola", "como", "estas");
    echo $text;
    ?>
</body>

</html>