<?php
session_start();

if ($_SESSION["origin"] != "signup" || !isset($_SESSION["origin"])) {
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
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $pass2 = $_POST["pass2"];
        $age = $_POST["age"];
        var_dump($_POST);

        if (empty($age)) {
            $age = 0;
        }

        $studies = [];
        if (isset($_POST["studies"])) {
            $studies = $_POST["studies"];
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