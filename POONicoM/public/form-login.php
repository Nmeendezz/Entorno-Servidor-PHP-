<?php
session_start();

$emailError = $passError = "";
$errors = false;

if (isset($_COOKIE["stay-connected"])) {
    $_SESSION["email"] = $_COOKIE["stay-connected"];
    $_SESSION["origin"] = "login";
    header("Location: index.php");
    exit();
}

if (isset($_SESSION['origin'])) {
    if ($_SESSION['origin'] == "login" || $_SESSION['origin'] == "create-book") {
        header("Location: index.php");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once $_SERVER["DOCUMENT_ROOT"] . "/POONicoM/utils/Function.php";

    $email = secure($_POST['email']);
    $pass = secure($_POST['password']);

    if (strlen($email) < 3 || !isset($email)) {
        $emailError = "Error";
        $errors = true;
    }

    if (strlen($pass) < 2) {
        $passError = "Error";
        $errors = true;
    }

    if (!$errors) {
        require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/app/repositories/UserDAO.php";
        $user = UserDAO::read($email);
        if ($user == null) {
            $_SESSION['error'] = "El email o contraseña introducidos no son correctos";
        } else {
            $checkedPassword = UserDAO::checkPassword($email, $pass);
            if ($checkedPassword == 1) {
                if (isset($_POST["stay-connected"])) {
                    setcookie("stay-connected", $email, time() + 60 * 60, "/");
                }
                unset($_SESSION["error"]);

                $_SESSION["email"] = $email;
                $_SESSION["origin"] = "login";
                header("Location: index.php");

                exit();
            } else {
                $_SESSION['error'] = "El email o contraseña introducidos no son correctos";
            }
        }
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