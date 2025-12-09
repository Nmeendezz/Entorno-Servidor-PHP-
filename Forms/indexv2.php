<?php
session_start();

//Compruebo la cookie
$nameCookie = "";
$session = $cookie = false;
if (isset($_COOKIE["logged"])) {
    $nameCookie = $_COOKIE["logged"];
    $cookie = true;
} else if (!isset($_SESSION["origin"]) || $_SESSION["origin"] != "signup") {
    $session = true;

    // header("Location: ./signup/signupv2.php");
    // exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Biennnn!</p>
    <?php
    if ($cookie) {
        echo "<p>Tenias la cookie activada $nameCookie </p>";
    }
    echo "<p>El nombre introducido era... </p>";

    if ($session) {
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        $pass = $_SESSION["pass"];
        $age = $_SESSION["age"];

        if (empty($age)) {
            $age = 0;
        }

        $studies = [];
        if (isset($_SESSION["studies"])) {
            $studies = $_SESSION["studies"];
        }

        require "User.php";
        $u = new User($name, $pass, $email, $age, $studies);
        echo "<p>$u</p>";
    }
    ?>
</body>

</html>