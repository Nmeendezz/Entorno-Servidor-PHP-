<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
include "geometry/Square.php";
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
    $s1 = new Square(14);
    $s2 = new Square(4.5);

    $s1->noStaticAtr = 10;
    echo $s1;
    $s2->noStaticAtr = 12;
    echo $s2;

    Square::$staticAtr = 25;
    echo $s1;
    echo $s2;

    echo Square::calculateAreaSide(25);
    ?>
</body>

</html>