<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "./../app/models/Book.php";
include "./../app/models/Magazine.php";
include "./../app/models/Newspaper.php";
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
    $b1 = new Book(321, "Cien años de soledad", true, "Gabriel Garcia Marquez");
    echo $b1;
    echo "<br>";
    $m1 = new Magazine(123, "AS", false, 13513);
    echo $m1;
    echo "<br>";
    $n1 = new Newspaper(234, "El Pais", true, "7 de noviembre de 2025");
    echo $n1;
    ?>
</body>
</html>