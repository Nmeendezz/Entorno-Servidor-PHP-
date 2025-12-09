<?php
session_start();

if (!isset($_SESSION["origin"]) || $_SESSION["origin"] != "form-recipe") {
    header("Location: Formrecipe.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="indexStyles.css">
</head>

<body>
    <?php
    /*
    var_dump($_POST);
    var_dump($_GET);
    var_dump($_SESSION);
    var_dump($_SERVER);
    */
    var_dump($_COOKIE);
    $name = $_SESSION["name"];
    $email = $_SESSION["email"];
    $recipe = $_SESSION["recipe"];
    $time = $_SESSION["time"];
    $type = $_SESSION["type"];
    $gluten = $_SESSION["gluten"];
    $color = $_SESSION["color"];

    if (empty($time)) {
        $time = 0;
    }

    if ($gluten == "Sin-Gluten") {
        $gluten = "Sin gluten";
    } else {
        $gluten = "Con gluten";
    }

    ?>
    <h1>Bienvenido <?= $name ?></h1>
<div class="container">
    <div class="recipe-card" style="--recipe-color: <?= $color ?>;">
        <h2><?= $recipe ?></h2>
        <p><strong>Autor:</strong> <?= $name ?> (<?= $email ?>)</p>
        <p><strong>Tiempo de preparación:</strong> <?= $time ?> minutos</p>
        <p><strong>Tipo:</strong> <?= $type ?></p>
        <p><strong>Gluten:</strong> <?= $gluten ?></p>

        <div>
            <span class="tag">🍴 <?= $type ?></span>
            <span class="tag">⏱ <?= $time ?> min</span>
            <span class="tag"><?= $gluten ?></span>
        </div>
    </div>

    <button onclick="window.location.href='closesesion.php'">Cerrar sesion y Borrar cookies</button>
</div>
</body>

</html>