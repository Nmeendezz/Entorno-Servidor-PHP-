<?php
session_start();

if (isset($_COOKIE["stay-connected"])) {
    $_SESSION["email"] = $_COOKIE["stay-connected"];
    $_SESSION["origin"] = "login";

    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Ha llegado después de hacer clic en Submit
    //1. Recojo datos securizando
    include_once $_SERVER["DOCUMENT_ROOT"] . "/POONicoM\utils\Function.php";

    $email = secure($_POST['email']);
    $pass = secure($_POST['password']);


    //2. Verifico
    if (strlen($email) < 3) {
        $emailError = "Error";
        $errors = true;
    }

    if (strlen($pass) < 3) {
        $passError = "Error";
        $errors = true;
    }

    if (!$errors) {
        if (isset($_POST["stay-connected"])) {
            setcookie("stay-connected", $email, time() + 60 * 60, "/");
        }
        unset($_SESSION["error"]);

        $_SESSION["email"] = $email;
        $_SESSION["origin"] = "login";
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
    <link rel="stylesheet" href="/POONicoM/public/css/styles-login.css">
    <link rel="stylesheet" href="/POONicoM/public/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sanchez:ital@0;1&display=swap" rel="stylesheet">
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/resources/views/layouts/header.php" ?>
    <main>
        <?php
        include $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/resources/views/components/login.php";
        ?>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/resources/views/layouts/footer.php" ?>
</body>

</html>