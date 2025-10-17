<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
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
    $cityTempMax;
    $cityTempMin;
    $dayTempMax;
    $dayTempMin;
    foreach ($temps as $ciudad => $info) {
        for ($i = 0; $i < count($info); $i++) {
            if ($info[$i] > $max) {
                $max = $info[$i];
                $cityTempMax = $ciudad;
                $dayTempMax = $i + 1;
            }
            if ($info[$i] < $min) {
                $min = $info[$i];
                $cityTempMin = $ciudad;
                $dayTempMin = $i + 1;
            }
        }
    }
    echo $max;
    echo "<br>";
    echo $min;
    echo "<br>";

    //Dia con mayor variacion termica
    $variationMax = 0;
    $variationDay;
    for ($i = 0; $i < count($info); $i++) {
        $diaMax = 0;
        $diaMin = 0;
        foreach ($temps as $ciudad => $info) {

            if ($info[$i] > $diaMax) {
                $diaMax = $info[$i];
            }
            if ($info[$i] < $diaMin) {
                $diaMin = $info[$i];
            }
        }

        if ($diaMax - $diaMin > $variationMax) {
            $variationMax = $diaMax - $diaMin;
            $variationDay = $i + 1;
        }
    }

    echo "La variacion es $variationMax";
    echo "<br>";
    echo "El dia es $variationDay";
    echo "<br><br>";

    //Media por ciudad
    $avgMax = 0;
    $averages = [];
    $avg;
    foreach ($temps as $ciudad => $info) {
        $sum = 0;
        for ($i = 0; $i < count($info); $i++) {
            $sum += $info[$i];
            $avg = round($sum / count($info), 2);
            $averages[$ciudad] = $avg;
        }

        if ($avg > $avgMax) {
            $avgMax = $avg;
            $cityAvgMax = $ciudad;
        }

    }

    ?>
    <div id="caja1">
        <h1>Temperaturas de ciudades por dia (Cº)</h1>
        <table>
            <tr>
                <th class="dias">Ciudad/Dia</th>
                <th class="dias">Dia 1</th>
                <th class="dias">Dia 2</th>
                <th class="dias">Dia 3</th>
                <th class="dias">Dia 4</th>
                <th class="dias">Dia 5</th>
                <th class="dias">Dia 6</th>
                <th class="dias">Media</th>
            </tr>
            <?php


            $cityAvgMax;
            foreach ($temps as $ciudad => $info) {
                echo "<tr>";
                echo '<th class="blue">' . $ciudad . '</th>';
                for ($i = 0; $i < count($info); $i++) {
                    if ($ciudad === $cityAvgMax) {
                        if ($info[$i] < 0) {
                            if ($info[$i] === $min) {
                                echo '<td class="yellow min">' . $info[$i] . '</td>';
                            } else {
                                echo '<td class="yellow skyblue">' . $info[$i] . '</td>';
                            }
                        } else if ($info[$i] > 35) {
                            if ($info[$i] === $max) {
                                echo '<td class="yellow max" >' . $info[$i] . '</td>';
                            } else {
                                echo '<td class="yellow red" >' . $info[$i] . '</td>';
                            }
                        } else {
                            echo '<td class="yellow" >' . $info[$i] . '</td>';
                        }
                    } else if ($i == 5) {
                        if ($info[$i] < 0) {
                            if ($info[$i] === $min) {
                                echo '<td class="green min">' . $info[$i] . '</td>';
                            } else {
                                echo '<td class="green skyblue">' . $info[$i] . '</td>';
                            }
                        } else if ($info[$i] > 35) {
                            if ($info[$i] === $max) {
                                echo '<td class="green max" >' . $info[$i] . '</td>';
                            } else {
                                echo '<td class="green red" >' . $info[$i] . '</td>';
                            }
                        } else {
                            echo '<td class="green">' . $info[$i] . '</td>';
                        }
                    } else if ($info[$i] < 0) {
                        if ($info[$i] === $min) {
                            echo '<td class="min">' . $info[$i] . '</td>';
                        } else {
                            echo '<td class="skyblue">' . $info[$i] . '</td>';
                        }
                    } else if ($info[$i] > 35) {
                        if ($info[$i] === $max) {
                            echo '<td class="max" >' . $info[$i] . '</td>';
                        } else {
                            echo '<td class="red" >' . $info[$i] . '</td>';
                        }
                    } else {
                        echo "<td>" . $info[$i] . "</td>";
                    }

                }
                echo '<td class="media">' . $averages[$ciudad] . '</td>';
                echo "</tr>";
            }

            ?>
        </table>
        <div id="caja2">
            <h3>Estadisticas</h3>
            <hr>
            <p><span>Temperatura minima: </span><?php echo "$min Cº  (Dia $dayTempMin, $cityTempMin)" ?></p>
            <hr class="punteado">
            <p><span>Temperatura maxima: </span><?php echo "$max Cº  (Dia $dayTempMax, $cityTempMax)" ?></p>
            <hr class="punteado">
            <p><span>Dia con mayor variacion: </span><?php echo "Dia $variationDay  ($variationMax Cº de diferencia)" ?></p>
        </div>
    </div>


</body>

</html>