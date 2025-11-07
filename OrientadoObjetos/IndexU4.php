<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include "ejerciciosU4POO/Empleade.php";
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
    $e1 = new Empleade("Nicolas", "Mendez", 235444, [623534, 6498434, 65481351]);
    $e2 = new Empleade("Rida", "Aharrar", 340023, [623534]);
    $e3 = new Empleade("Javier", "Montero", 34000, [623534]);
    $e4 = new Empleade("Marcos", "Perez", 5000, [623534]);


    $e1->añadirTelefono(1234567);
    echo $e1->toHtml();
    echo "<br>";
    ?>
</body>

</html>