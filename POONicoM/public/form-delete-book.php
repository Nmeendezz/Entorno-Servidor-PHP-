<?php
session_start();
$isbn = "";
$isbnError = "";
$errors = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/utils/Function.php";
    $isbn = secure($_POST['isbn']);

    if (empty($isbn)) {
        $isbnError = "Es obligatorio introducir el ISBN del libro";
        $errors = true;
    }

    if (!$errors) {
        require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/app/repositories/BookDAO.php";
        if (BookDAO::delete($isbn)) {
            $_SESSION['eliminated'] = 'Se ha eliminado el libro con el ISBN "' . $isbn . '" con exito';
            header("Location: index.php");
            exit();
        } else {
            echo "no se ha eliminado";
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
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/resources/views/components/deleteBook.php";
    ?>
</body>

</html>