<?php
//include("Cat.php");
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

    include("Minotauro.php");

    $min1 = new Minotauro("Isabel II");
    $min2 = new Minotauro("Felipe V", 10);

    echo "<p>La edad de " . $min1->getName() . " es " . $min1->getAge() . "</p>";
    echo "<p>La edad de " . $min2->getName() . " es " . $min2->getAge() . "</p>";
    
    echo $min1;
    
    ?>
</body>

</html>