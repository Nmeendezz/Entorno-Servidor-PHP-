<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "./../app/models/Book.php";
include "./../app/models/Magazine.php";
include "./../app/models/Newspaper.php";
include "./../app/models/User.php";
include "./../app/models/Rental.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/Styles.css">
    <script src="https://kit.fontawesome.com/aa13bcf161.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <div>
            <h3><i class="fa-solid fa-book"></i>Biblioteca Digital</h3>
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Buscar">
            </div>

        </div>
    </nav>
    <h4>Usuarios</h4>
    <div class="users-container">
        <div class="user-box">
            <h4>Usuario 1</h4>
            <?php
            $b1 = new Book(321, "Cien años de soledad", true, "Gabriel Garcia Marquez");
            $m1 = new Magazine(123, "AS", false, 13513);
            $n1 = new Newspaper(234, "El Pais", true, "07/09/2025");

            $r1 = new Rental($m1, "29/11/2022", "12/12/2022");
            $r2 = new Rental($b1, "09/09/2021", "02/10/2021");
            $u1 = new User("Nicolas", "Mendez", "55126696C", "nico@gmail.com", "12345", [$r1, $r2]);
            echo $u1;
            ?>
        </div>
        <div class="user-box">
            <h4>Usuario 1</h4>
            <?php
            $b1 = new Book(321, "Cien años de soledad", true, "Gabriel Garcia Marquez");
            $m1 = new Magazine(123, "AS", false, 13513);
            $n1 = new Newspaper(234, "El Pais", true, "07/09/2025");

            $r1 = new Rental($m1, "29/11/2022", "12/12/2022");
            $r2 = new Rental($b1, "09/09/2021", "02/10/2021");
            $u1 = new User("Nicolas", "Mendez", "55126696C", "nico@gmail.com", "12345", [$r1, $r2]);
            echo $u1;
            ?>
        </div>
        <div class="user-box">
            <h4>Usuario 1</h4>
            <?php
            $b1 = new Book(321, "Cien años de soledad", true, "Gabriel Garcia Marquez");
            $m1 = new Magazine(123, "AS", false, 13513);
            $n1 = new Newspaper(234, "El Pais", true, "07/09/2025");

            $r1 = new Rental($m1, "29/11/2022", "12/12/2022");
            $r2 = new Rental($b1, "09/09/2021", "02/10/2021");
            $u1 = new User("Nicolas", "Mendez", "55126696C", "nico@gmail.com", "12345", [$r1, $r2]);
            echo $u1;
            ?>
        </div>

        <div class="user-box">
            <h4>Usuario 1</h4>
            <?php
            $b1 = new Book(321, "Cien años de soledad", true, "Gabriel Garcia Marquez");
            $m1 = new Magazine(123, "AS", false, 13513);
            $n1 = new Newspaper(234, "El Pais", true, "07/09/2025");

            $r1 = new Rental($m1, "29/11/2022", "12/12/2022");
            $r2 = new Rental($b1, "09/09/2021", "02/10/2021");
            $u1 = new User("Nicolas", "Mendez", "55126696C", "nico@gmail.com", "12345", [$r1, $r2]);
            echo $u1;
            ?>
        </div>
    </div>

</body>

</html>