<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer programa en PHP</title>
</head>

<body>
    <h2>PHP:</h2>

    <?php
        echo "Hola mundo";

        //Variables
        //Java: String name = "Nico";

            $name = "Nico";
        echo "<br>";
        echo "Me llamo $name";

        echo "<p>Hola, me llamo $name</p>";
        echo '<p>Hola, me llamo $name</p>';
        
        $name = 3;
        echo "<p>Hola $name</p>"
    ?>

    <h2>Mas PHP</h2>
    <?php
        echo "<p>La variable name tiene: $name</p>"
    ?>
</body>
</html>