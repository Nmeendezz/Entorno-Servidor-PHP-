<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include "./employee/Employee.php";
include "./employee/Manager.php";
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
    $e1 = new Employee("Nicolas", "Mendez", 5600);
    echo $e1->calculateSalary();
    ?>
</body>
</html>
