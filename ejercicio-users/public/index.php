<?php
session_start();

if (!(isset($_COOKIE["stay-connected"]) or isset($_SESSION["origin"]))){
    $_SESSION["error"]= "Te has intentado colar en el index";
   // header("Location: form-login.php");
   // exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Incluir css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Incluir cabecera -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/resources/views/layouts/header.php" ?>
    <main>

        <?php

        if (isset($_SESSION['origin']) && $_SESSION['origin'] == "signup") {
            require_once $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/app/models/User.php";

            /*
            $region = "madrid";
            $u = new User("nombre", "a@a.com", "asdf", constant("Region::$region"));
            echo "$u";
            */
            $region = "madrid";
            $u1 = new User(
                $_SESSION["fullname"],
                $_SESSION["signup-email"],
                "", // contraseña vacia
                constant("Region::$region")
            );

            echo "$u1";
        }
        
        if (isset($_SESSION["origin"]) and $_SESSION["origin"] == "login") {
            echo "<p>Te damos la bienvenida, {$_SESSION['email']}</p>";
        }
        // Ver si tiene cookies de permanecer registrado. Coger su nombre
        // Si no tiene cookie pero tiene sesión, recuperar su nombre
        // Si no, a signup.
        
        ?>

    </main>
    <!-- Incluir footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/resources/views/layouts/footer.php" ?>
</body>

</html>