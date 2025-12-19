<?php



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