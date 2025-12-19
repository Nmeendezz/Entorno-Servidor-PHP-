<?php
session_start();

$name = $surname = $dni = $email = $pass = "";
$nameError = $surnameError = $dniError = $emailError = $passError = "";
$errors = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/utils/Function.php";
    $name = secure($_POST['name']);
    $surname = secure($_POST['surname']);
    $dni = secure($_POST['dni']);
    $email = secure($_POST['email']);
    $pass = secure($_POST['password']);
    $pass2 = secure($_POST['confirm-password']);

    if (empty($name)) {
        $nameError = "Es obligatorio introducir el nombre";
        $errors = true;
    }

    if (empty($surname)) {
        $surnameError = "Es obligatorio introducir el apellido";
        $errors = true;
    }

    if (empty($dni)) {
        $dniError = "Introduzca un DNI válido";
        $errors = true;
    }

    if (empty($email)) {
        $emailError = "Es obligatorio introducir el email";
        $errors = true;
    }

    if (empty($pass)) {
        $passError = "Es obligatorio introducir una contraseña";
        $errors = true;
    }

    if ($pass != $pass2) {
        $passError = "Las contraseñas no coinciden";
        $errors = true;
    }

    if (!$errors) {
        $_SESSION['name'] = $name;
        $_SESSION['surname'] = $surname;
        $_SESSION['dni'] = $dni;

        $_SESSION['origin'] = "signup";

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
    <link rel="stylesheet" href="/POONicoM/public/css/styles-signup.css">
    <link rel="stylesheet" href="/POONicoM/public/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sanchez:ital@0;1&display=swap" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/resources/views/layouts/header.php" ?>
    <main>
        <?php
        include $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/resources/views/components/signup.php";
        ?>
    </main>
    <!-- FOOTER -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/resources/views/layouts/footer.php" ?>
</body>

</html>