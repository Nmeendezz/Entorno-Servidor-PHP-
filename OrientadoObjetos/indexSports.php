<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
include "sports/Tennis.php";
include "sports/Rugby.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //$s1 = new Sport(""); NO SE PUEDE PORQUE ES UNA CLASE ABSTRACTA

    $r1 = new Rugby("Los Pumas", "Equipo", true, 15);
    echo "<p>$r1</p>";


    $t1 = new Tennis("Cemento", ["Wilson", "Decathlon"], "Individual", false, 2);
    echo "<p>$t1</p>";
    ?>
</body>
</html>