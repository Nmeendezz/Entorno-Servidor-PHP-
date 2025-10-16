<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
    <link rel="stylesheet" href="tablasMultiplicarEstilos.css">
</head>

<body>
    <?php
    //Ejercicio 20
    echo "<h1>Ejercicio 20</h1>";
    echo "<table>";
    echo "<tr>";
    echo "<th id=\"firstCell\">X</th>";
    for ($i = 0; $i < 10; $i++) {
        echo "<th id=\"firstLine\">$i</th>";
    }
    echo "</tr>";
    for ($i = 0; $i < 10; $i++) {
        echo "<tr>";
        echo "<th id=\"firstRow\">$i</th>";
        for ($j = 0; $j < 10; $j++) {
            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>