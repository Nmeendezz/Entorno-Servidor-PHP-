<?php
include("Cat.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Clases: Animales</h3>
    <?php
    $cat = new Cat("mario", "naranja", 9);
    echo $cat->miau();
    ?>
</body>

</html>