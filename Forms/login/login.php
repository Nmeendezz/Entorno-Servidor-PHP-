<?php
session_start();

$name = $pass = $terms = "";
$termsError = "";
$nameError = "";
$errores = false;

if($_SERVER['REQUEST_METHOD'] == "POST"){
    include $_SERVER['DOCUMENT_ROOT'] . "/Forms/utils.php";
    $name = secure($_POST["name"]);
    $pass = secure($_POST["pass"]);

    if(isset($_POST['terms'])){
        $terms = $_POST["terms"];
    } else {
        $errores = true;
        $termsError = "Es obligatorio aceptar los terminos";
    }

    if(strlen($name) < 3 || strlen($name) > 15){
        $nameError = "Longitud entre 3 y 15";
        $errores = true;
    }

    if(!$errores){
        $_SESSION["name"] = $name;
        $_SESSION["pass"] = $pass;
        $_SESSION["terms"] = $terms;

        $_SESSION["origin"] = "login";  //viene bien para saber en el index de donde vengo

        $_SESSION["test"] = "hola";  //no vale para nada

        //Hago la cookie para permanecer registrado
        setcookie("logged", $name, time()+30*24*60*60, "/"); // un mes


        header("Location: ../indexv2.php");
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
    <link rel="stylesheet" href="../formularios.css">
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" placeholder="Nombre..." value="<?= $name ?>">
        <p class="error"><?= $nameError?></p>
        <br>
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass">
        <br>
        <input type="checkbox" name="terms" id="terms" class="<?= empty($termsError) ? '' : 'checkError' ?>">
        <label for="terms" 
        class="<?= empty($termsError) ? '' : 'checkError' ?>">Acepto los terminos</label>
        <p class="error"><?= $termsError ?></p>
        <input type="checkbox" name="logged" id="logged">
        <label for="logged">Quiero permanecer registrado</label>
        <br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>