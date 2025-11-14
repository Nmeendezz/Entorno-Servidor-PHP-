<?php
include "./classes/Customer.php";
include "./classes/GrupalTraining.php";
include "./classes/PersonalTraining.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $u1 = new Customer("55126696C", "Nicolás Méndez", []);
    $u2 = new Customer("52275366Q", "Ángela Marín", []);

    $p1 = new PersonalTraining(123, "Pliometría", 60, true);
    $p2 = new PersonalTraining(1234, "Pierna", 90, true);
    $p3 = new PersonalTraining(12345, "HIIT", 45, false);

    $g1 = new GrupalTraining(321, "Zumba", 35, "Jose");
    $g2 = new GrupalTraining(4321, "Spinning", 65, "Pedro");
    $g3 = new GrupalTraining(54321, "Natación", 95, "Cesar");

    $u1->addActivitie($p1);
    $u1->addActivitie($p2);
    $u1->addActivitie($p3);
    $u1->addActivitie($g1);

    $u2->addActivitie($g2);
    $u2->addActivitie($g3);

    $i1 = $u1->findActiviteCode(123);
    $i2 = $u2->findActiviteCode(123);
    ?>
    <h2>Usuario <?= $u1->getName() ?></h2>
    <?php 
    echo $u1; 
    echo "<strong>El usuario  ". $u1->getName() . " $i1</strong>";
    ?>

    <h2>Usuario <?= $u2->getName() ?></h2>
    <?php 
    echo $u2; 
    echo "<strong>El usuario ". $u2->getName() . " $i2</strong>";
    ?>

</body>

</html>