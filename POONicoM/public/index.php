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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sanchez:ital@0;1&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/aa13bcf161.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <div>
            <h1 class="sanchez-regular"><i class="fa-solid fa-book"></i>Biblioteca Digital</h1>
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Buscar" class="sanchez-regular">
            </div>

        </div>
    </nav>
    <h2 class="sanchez-regular-italic">Usuarios</h2>
    <div class="users-container">
        <div class="user-box">
            <h3>Usuario 1</h3>
            <?php
            $b1 = new Book(321, "Cien años de soledad", true, "Gabriel Garcia Marquez");
            $n1 = new Newspaper(234, "El Pais", true, "07/09/2025");

            $r1 = new Rental($n1, "29/11/2022", "12/12/2022");
            $r2 = new Rental($b1, "09/09/2021", "02/10/2021");
            $u1 = new User("Angela", "Marin", "52275366Y", "angela@gmail.com", "12345", [$r1, $r2]);
            echo $u1;
            ?>
        </div>
        <div class="user-box">
            <h3>Usuario 2</h3>
            <?php
            $b1 = new Book(102, "Don Quijote de la Mancha", false, "Miguel de Cervantes");
            $m1 = new Magazine(123, "AS", false, 13513);

            $r1 = new Rental($m1, "29/01/2012", "12/02/2012");
            $r2 = new Rental($b1, "09/03/2018", "02/04/2018");
            $u1 = new User("Nicolas", "Mendez", "55126696C", "nico@gmail.com", "12345", [$r1, $r2]);
            echo $u1;
            ?>
        </div>
        <div class="user-box">
            <h3>Usuario 3</h3>
            <?php
            $m1 = new Magazine(202, "Time Magazine", false, 45);
            $n1 = new Newspaper(303, "La Nación", true, "12/11/2025");

            $r1 = new Rental($m1, "12/10/2019", "20/10/2019");
            $r2 = new Rental($n1, "16/05/2022", "30/06/2022");
            $u1 = new User("Sophia", "Guerrero", "1011229921F", "sophia@gmail.com", "12345", [$r1, $r2]);
            echo $u1;
            ?>
        </div>

        <div class="user-box">
            <h3>Usuario 4</h3>
            <?php
            $m1 = new Magazine(201, "National Geographic", true, 132);
            $n1 = new Newspaper(302, "The New York Times", false, "13/11/2025");

            $r1 = new Rental($m1, "29/11/2022", "12/12/2022");
            $r2 = new Rental($n1, "09/09/2021", "02/10/2021");
            $u1 = new User("Gilberto", "Guerrero", "19485378G", "gilberto@gmail.com", "12345", [$r1, $r2]);
            echo $u1;
            ?>
        </div>
        <div class="user-box">
            <h3>Usuario 5</h3>
            <?php
            $m1 = new Magazine(402, "Time Magazine", false, 45);
            $n1 = new Newspaper(235, "La Nación", true, "10/10/2025");
            
            $r1 = new Rental($m1, "10/03/2022", "25/03/2022");
            $r2 = new Rental($n1, "01/06/2022", "15/06/2022");
            $u1 = new User("Laura", "Vargas", "55889922C", "laura@gmail.com", "abcde", [$r1, $r2]);
            echo $u1;
            ?>
        </div>
        <div class="user-box">
            <h3>Usuario 6</h3>
            <?php
            $b1 = new Book(324, "La sombra del viento", true, "Carlos Ruiz Zafón");
            $n1 = new Newspaper(237, "The Guardian", true, "13/11/2025");

            $r1 = new Rental($b1, "20/07/2021", "05/08/2021");
            $r2 = new Rental($n1, "10/10/2021", "25/10/2021");
            $u1 = new User("Miguel", "Fernandez", "66991133D", "miguel@gmail.com", "qwerty", [$r1, $r2]);
            echo $u1;
            ?>
        </div>
    </div>
    <footer>
        <p>2025 Biblioteca Digital. Todos los derechos reservados</p>
        <p>Desarrollado por <strong>Nicolás Esteban Méndez Marín</strong></p>
    </footer>
</body>

</html>