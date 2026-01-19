<?php
session_start();
if (!(isset($_COOKIE["stay-connected"]) or isset($_SESSION["origin"]))){
    $_SESSION["error"]= "Te has intentado colar en el index";
    header("Location: form-login.php");
    exit();
}

$title = $autor = $isbn = "";
$titleError = $autorError = $isbnError = "";
$available = false;
$errors = false;

if($_SERVER['REQUEST_METHOD'] == "POST"){
    require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/utils/Function.php";
    $isbn = secure($_POST['isbn']);
    $title = secure($_POST['title']);
    $autor = secure($_POST['autor']);

    if (empty($isbn)) {
        $isbnError = "Es obligatorio introducir el ISBN del libro";
        $errors = true;
    }

    if (empty($title)) {
        $titleError = "Es obligatorio introducir el titulo";
        $errors = true;
    }

    if (empty($autor)) {
        $autorError = "Es obligatorio introducir el autor";
        $errors = true;
    }

    if(!$errors){
        require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/app/repositories/BookDAO.php";
        $b = new Book($title, $available, $autor, $isbn);
        if(BookDAO::create($b)){
            $_SESSION['title'] = $title;
            $_SESSION['available'] = $available;
            $_SESSION['autor'] = $autor;
            $_SESSION['id'] = $b->getId();
            $_SESSION['origin'] = "create-book";
            header("Location: index.php");
            exit();
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
    <link rel="stylesheet" href="/POONicoM/public/css/styles-signup.css">
    <link rel="stylesheet" href="/POONicoM/public/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sanchez:ital@0;1&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Cabecera -->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/resources/views/layouts/header.php" ?>
    <main>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/resources/views/components/book.php" ?>
    </main>
    <!-- Footer -->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/resources/views/layouts/footer.php" ?>

</body>

</html>