<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "./clases/Arbol.php";
include "./clases/Flor.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Ejercicio 2</h2>
    <?php
    $f1 = new Flor("Orquidea", 22.8, "marzo");
    $a1 = new Arbol("Pino", 120, true);
    $a2 = new Arbol("Roble", 250, false);

    $f1->crecer(1.3);
    ?>
    <ul>
        <li><?php echo $f1 ?></li>
        <li><?php echo $a1 ?></li>
        <li><?php echo $a2 ?></li>
    </ul>
</body>

</html>