<?php
session_start();

$fullname = $email = $pass = $region = $connect = "";
$passError = $nameError = $emailError = "";
$errors = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include $_SERVER['DOCUMENT_ROOT'] . "/ejercicio-users/utils/functions.php";
    $fullname = secure($_POST["fullname"]);
    $email = secure($_POST["signup-email"]);
    $pass = secure($_POST["signup-password"]);
    $pass2 = secure($_POST["confirm-password"]);
    $region = $_POST["region"];

    if(isset($_POST["stay-connected"])){
        $connect = $_POST["stay-connected"];
    }

    if(empty($fullname)){
        $errors = true;
        $nameError = "El nombre es obligatorio";
    }

    if(empty($email)){
        $errors = true;
        $emailError = "El email es obligatorio";
    }
    
    if(empty($pass) || $pass != $pass2){
        $errors = true;
        $passError = "Las contraseñas no coinciden";
    }

    if(!$errors){
        $_SESSION["fullname"] = $fullname;
        $_SESSION["signup-email"] = $email;
        // $_SESSION["signup-password"] = $pass;
        $_SESSION["region"] = $region;
        $_SESSION["origin"] = "signup";

        header("Location: index.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Incluir cabecera -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/resources/views/layouts/header.php" ?>
    <main>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/resources/views/components/signup.php" ?>
    </main>
    <!-- Incluir footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/resources/views/layouts/footer.php" ?>
</body>

</html>