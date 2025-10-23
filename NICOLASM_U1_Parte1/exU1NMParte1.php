<?php
include("modeloA.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen U1</title>
</head>

<body>
    <h3>Ejercicio 1</h3>
    <?php
    //Ejercicio 1
    
    echo "<ol>";
    foreach ($employees as $employee) {
        if ($employee["department"] == "Sales") {
            echo '<li>' . $employee['name'] . ' - ' . $employee['salary'] . '</li>';
        }

    }
    echo "</ol>";

    ?>

    <h3>Ejercicio 2</h3>
    <?php
    //Ejercicio 2
    $sumSales = 0;
    $contSales = 0;
    $sumIt = 0;
    $contIt = 0;
    $departmentSales;
    $departmentIt;
    foreach ($employees as $employee) {
        if ($employee["department"] == "Sales") {
            $departmentSales = $employee["department"];
            $sumSales += $employee["salary"];
            $contSales++;
        }
        if ($employee["department"] == "IT") {
            $departmentIt = $employee["department"];
            $sumIt += $employee["salary"];
            $contIt++;
        }
    }
    $avgSales = $sumSales / $contSales;
    $avgIt = $sumIt / $contIt;

    echo '<p> El salario medio de ' . $employees['department'][$departmentSales] . ' es ' . $avgSales . '</p>';
    echo '<p> El salario medio de ' . $employees['department'][$departmentIt] . ' es ' . $avgIt . '</p>';
    ?>

    <h3>Ejercicio 3</h3>
    <?php

    $namesSorted = [];
    foreach ($employees as $employee) {
        if ($employee["department"] == "IT") {
            $namesSorted[] = $employee["name"];
        }
    }

    asort($namesSorted);
    echo "<ul>";
    foreach ($namesSorted as $name) {
        echo "<li>" . $name . "</li>";
    }
    echo "</ul>";
    ?>
</body>

</html>