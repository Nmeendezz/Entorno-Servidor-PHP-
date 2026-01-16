<?php
if (!(isset($_COOKIE["stay-connected"]) or isset($_SESSION["origin"]))) {
    header("Location: form-login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles-index-old.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sanchez:ital@0;1&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/aa13bcf161.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/resources/views/layouts/header.php"; ?>
    <main>
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/app/repositories/UserDAO.php";

        if (isset($_SESSION['origin']) && $_SESSION['origin'] == "signup") {
            require_once $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/app/models/User.php";

            $u 
        }
        ?>
    </main>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/resources/views/layouts/footer.php"; ?>

</body>

</html>