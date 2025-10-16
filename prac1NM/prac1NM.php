<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            text-align: center;
            align-items: center;
            width: 80%;
            margin: 0 auto;
            justify-items: center;
        }

        h1 {
            background-color: #465055;
            color: white;
            padding-top: 10px;
            padding-bottom: 10px;
            width: 100%;
        }

        table,
        td,
        th {
            border: solid 1px;
            border-collapse: collapse;
            width: 100%;

        }

        table {
            border-radius: 20px;
        }

        td,
        th {
            padding: 20px;
            width: 30px;
        }

        .blue {
            background-color: #cdebf0;
        }

        .green {
            background-color: #d2ebd7;
        }
    </style>
</head>

<body>
    <h3>Ejercicio 1</h3>
    <?php
    $rows = 14 % 8 + 4;
    $columns = 13 % 6 + 5;

    //Primera figura
    echo "<code>";
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    echo "</code>";
    echo "<br>";

    //Segunda figura
    echo "<code>";
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $i; $j++) {
            if ($j < $columns) {
                echo "* ";
            }
        }
        echo "<br>";
    }
    echo "</code>";
    echo "<br>";

    //Tercera figura
    echo "<code>";
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
            if ($i == 0 || $i == $rows - 1 || $j == 0 || $j == $columns - 1) {
                echo "* ";
            } else {
                echo "&nbsp&nbsp";
            }
        }
        echo "<br>";
    }
    echo "</code>";
    echo "<br>";

    //Cuarta figura
    echo "<code>";
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
            if (($i + $j) % 2 == 0) {
                echo "* ";
            } else {
                echo "&nbsp&nbsp";
            }
        }
        echo "<br>";
    }
    echo "</code>";
    echo "<br>";
    ?>

    <h3>Ejercicio 2</h3>
    <?php

    $temps = [
        "Ciudad 1" => [
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45)
        ],
        "Ciudad 2" => [
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45)
        ],
        "Ciudad 3" => [
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45)
        ],
        "Ciudad 4" => [
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45)
        ],
        "Ciudad 5" => [
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45)
        ],
        "Ciudad 6" => [
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45),
            mt_rand(-10, 45)
        ],
    ];
    //Temperatura mas alta y baja
    
    $max = 0;
    $min = 0;
    foreach ($temps as $ciudad => $info) {
        foreach ($info as $temperatura) {
            if ($temperatura > $max) {
                $max = $temperatura;
            }
            if ($temperatura < $min) {
                $min = $temperatura;
            }
        }
    }
    echo $max;
    echo "<br>";
    echo $min;
    echo "<br>";

    //Dia con mayor variacion termica
    $diaMax = 0;
    foreach ($temps as $ciudad => $info) {
        for ($i = 0; $i < count($info); $i++) {
            if ($info[$i] > $diaMax) {
                $diaMax = $info[$i];
            }
        }
    }
    echo $diaMax;
    echo "<br><br>";

    //Media por ciudad
    $sum = 0;
    $cont = 0;
    foreach ($temps as $ciudad => $info) {
        foreach ($info as $temperatura) {
            $sum += $temperatura;
            $cont++;
        }
        $temps[$ciudad]['media'] = $sum / $cont;
    }
    foreach ($temps as $ciudad => $info) {
        echo $temps[$ciudad]['media'];
        echo "<br>";
    }

    ?>
    <div>
        <h1>Temperaturas de ciudades por dia (Cº)</h1>
        <table>
            <tr>
                <th>Ciudad/Dia</th>
                <th>Dia 1</th>
                <th>Dia 2</th>
                <th>Dia 3</th>
                <th>Dia 4</th>
                <th>Dia 5</th>
                <th class="green">Dia 6</th>
                <th>Media</th>
            </tr>
            <?php
            foreach ($temps as $ciudad => $info) {
                echo "<tr>";
                echo '<th class="blue">' . $ciudad . '</th>';
                foreach( $info as $temperatura ) {
                    
                    echo "<td> $temperatura </td>";
                }
                echo "</tr>";
            }

            ?>
        </table>
    </div>


</body>

</html>