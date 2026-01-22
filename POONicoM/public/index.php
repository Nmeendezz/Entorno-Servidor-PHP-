<?php
session_start();
if (!(isset($_COOKIE["stay-connected"]) or isset($_SESSION["origin"]))) {
    header("Location: form-login.php");
    exit();
}

if (isset($_COOKIE["stay-connected"])) {
    require_once $_SERVER["DOCUMENT_ROOT"] . "/POONicoM/app/repositories/UserDAO.php";
    $email = $_COOKIE["stay-connected"];
    $user = UserDAO::read($email);

    if ($user) {
        $_SESSION["email"] = $email;
        $_SESSION["name"] = $user->getName();
        $_SESSION["surname"] = $user->getSurname();
        $_SESSION["origin"] = "login";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles-index.css">
    <link rel="stylesheet" href="./css/styles-login.css">
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

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['delete-book']) && isset($_POST['isbn'])) {
                require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/app/repositories/BookDAO.php";
                $isbn = $_POST['isbn'];
                BookDAO::delete($isbn);
                header("Location: " . $_SERVER["PHP_SELF"]);
                exit();
            }

            if (isset($_POST['create-book']) && isset($_POST["isbn"])) {
                require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/utils/Function.php";
                $title = $autor = $isbn = "";
                $titleError = $autorError = $isbnError = $availableError = $errorDb = "";
                $available = false;
                $errors = false;

                $isbn = secure($_POST['isbn']);
                $title = secure($_POST['title']);
                $autor = secure($_POST['autor']);
                $available = $_POST['available'];

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

                if (empty($available)) {
                    $availableError = "Es obligatorio seleccionar una opcion";
                    $errors = true;
                }

                if ($available == "si") {
                    $available = true;
                } else {
                    $available = false;
                }

                if (!$errors) {
                    require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/app/repositories/BookDAO.php";
                    $b = new Book($title, $available, $autor, $isbn);
                    if (BookDAO::create($b)) {
                        header("Location: index.php");
                        exit();
                    } else {
                        $errorDb = "El ISBN introducido ya existe";
                    }
                }
            }
        }
        if (isset($_SESSION['origin'])) {
            if ($_SESSION['origin'] == "login" || $_SESSION['origin'] == "create-book") {
                require_once $_SERVER["DOCUMENT_ROOT"] . "/POONicoM/app/models/User.php";
                $u = UserDAO::read($_SESSION['email']);

                echo "<p>Te damos la bienvenida, " . $u->getFullName() . "</p>";

                ?>
            </main>
            <main>
                <?php
                require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/app/repositories/BookDAO.php";
                $books = BookDAO::readAll();
                if ($books == []) {
                    echo "<p>No se ha creado ningun Libro</p>";
                } else {
                    $cont = 1;
                    echo "<p>";
                    foreach ($books as $book) {
                        echo "Libro " . $cont . $book . "<br><br>";
                        $cont++;
                    }
                    echo "</p>";
                }
            }
        }
        ?>
    </main>
    <main>
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/resources/views/components/book.php";
        ?>
    </main>
    <main>
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/resources/views/components/deleteBook.php";
        ?>
    </main>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/resources/views/layouts/footer.php"; ?>

</body>

</html>