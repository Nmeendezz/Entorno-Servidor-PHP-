<?php
session_start();

if (!isset($_SESSION["origin"]) || $_SESSION["origin"] != "signup") {
    header("Location: signupv2.php");
    exit();
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
    var_dump($_POST);
    var_dump($_GET);
    var_dump($_SERVER);
    echo "<p>El nombre introducido era... </p>";


    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        $pass = $_SESSION["pass"];
        $pass2 = $_SESSION["pass2"];
        $age = $_SESSION["age"];
        var_dump($_SESSION);

        if (empty($age)) {
            $age = 0;
        }

        $studies = [];
        if (isset($_SESSION["studies"])) {
            $studies = $_SESSION["studies"];
        }
        
        require "User.php";
        $u = new User($name, $email, $pass, $studies);
        echo "<p>$u</p>";
    } else {
        echo "<p>No puedes estar aqui </p>";
    }
    ?>
</body>

</html>