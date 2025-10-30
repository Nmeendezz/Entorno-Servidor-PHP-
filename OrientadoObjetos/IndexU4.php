<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
include "ejerciciosU4POO/Employee.php";
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
    $e1 = new Employee("Nico", "Mendez", 34);
    echo $e1;
    ?>
</body>
</html>