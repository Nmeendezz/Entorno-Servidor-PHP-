<?php
session_start();

$name = $email = $recipe = $type = $gluten = $color = "";
$time = 0;
$errores = false;
$glutenError = "";
$typeError = "";
function secure($text)
{
    return htmlspecialchars(stripslashes(trim($text)));
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = secure($_POST["name"]);
    $email = secure($_POST["email"]);
    $recipe = secure($_POST["recipe"]);
    $time = secure($_POST["time"]);
    $color = secure($_POST["color"]);

    if (!empty($_POST["type"])) {
        $type = ($_POST["type"]);
        if($type == "unselected"){
            $errores = true;
            $typeError = "Es obligatorio elegir un tipo de comida";
        }
    } else {
        $errores = true;
    }

    if (!empty($_POST["gluten"])) {
        $gluten = secure($_POST["gluten"]);
    } else {
        $errores = true;
        $glutenError = "Es obligatorio elegir una opcion";
    }

    if(isset($_POST["cookie"])){
        setcookie("receta", "valor de la cookie", time()+14*24*60*60);
    }

    if (!$errores) {
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["recipe"] = $recipe;
        $_SESSION["time"] = $time;
        $_SESSION["type"] = $type;
        $_SESSION["gluten"] = $gluten;
        $_SESSION["color"] = $color;

        $_SESSION["origin"] = "form-recipe";

        header("Location: indexrecipe.php");
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Formstyles.css">
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" placeholder="Nombre" value="<?= $name ?>" required>
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= $email ?>">
        <br>
        <label for="recipe">Titulo de la receta</label>
        <input type="text" name="recipe" id="recipe" value="<?= $recipe ?>">
        <br>
        <label for="time">Tiempo</label>
        <input type="number" name="time" id="time" value="<?= $time ?>">
        <br>
        <label for="type">Tipo de comida</label>
        <select name="type" id="type">
            <option value="unselected">Elegir</option>
            <option value="vegana" <?= ($type == "vegana") ? "selected": ""?>>Vegana</option>
            <option value="vegetariana" <?= ($type == "vegetariana") ? "selected": ""?>>Vegetariana</option>
            <option value="carnivora" <?= ($type == "carnivora") ? "selected": ""?>>Carnívora</option>
        </select>
        <p class="error"><?= $typeError ?></p>
        <p>¿Tiene gluten?</p>
        <input type="radio" name="gluten" id="gluten-si" value="Con-Gluten" <?= ($gluten == "Con-Gluten") ? "checked": ""?>>
        <label class="glutenLabel" for="gluten-si">Si tiene</label>
        <br>
        <input type="radio" name="gluten" id="gluten-no" value="Sin-Gluten" <?= ($gluten == "Sin-Gluten") ? "checked": ""?>>
        <label class="glutenLabel" for="gluten-no">No tiene</label>
        <p class="error"><?= $glutenError ?></p>
        <label for="color">Color de la comida</label>
        <input type="color" name="color" id="color">
        <br>
        <input type="checkbox" name="cookie" id="cookie">
        <label for="cookie">Quiero que me hagas una cookie</label>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar todo">
    </form>
</body>

</html>