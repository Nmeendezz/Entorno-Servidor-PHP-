<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <style>
        table,
        th,
        tr,
        td {
            border: 1px solid;
            border-collapse: collapse;
        }

        th,
        td {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    //Ejercicio 1
    echo "<h1>Ejercicio 1</h1>";

    $integer = 4;
    $string = "Hola Mundo";
    $double = 4.5;
    $boolean = true;

    echo "La variable es de tipo " . gettype($integer) . " y tiene valor $integer <br>";
    echo "La variable es de tipo " . gettype($string) . " y tiene valor $string <br>";
    echo "La variable es de tipo " . gettype($double) . " y tiene valor $double <br>";
    echo "La variable es de tipo " . gettype($boolean) . " y tiene valor $boolean <br>";

    //Ejercicio 2
    echo "<h1>Ejercicio 2</h1>";

    $num1 = 4;
    $num2 = 2;

    echo "El modulo de $num1 y $num2 es " . $num1 % $num2 . ". <br>";
    echo "La potencia de $num1 elevado a $num2 es " . pow($num1, $num2) . ".<br>";

    //Ejercicio 3
    echo "<h1>Ejercicio 3</h1>";

    $name = "Nicolas";
    $surname = "Mendez Marin";
    $bornYear = 2006;

    echo "<table>";
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<td>$name</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Apellidos</th>";
    echo "<td>$surname</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Año de nacimiento</th>";
    echo "<td>$bornYear</td>";
    echo "</tr>";
    echo "</table>";

    //Ejercicio 4
    echo "<h1>Ejercicio 4</h1>";

    $age = 19;
    echo "Actualmente tienes $age, dentro de diez años tendras " .
        $age + 10 . " años. Te quedan " . 60 - $age . " años para jubilarte";

    //Ejercicio 5
    echo "<h1>Ejercicio 5</h1>";

    $precio = -30;
    if ($precio >= 1000) {
        echo "Caro";
    } elseif ($precio > 100 && $precio < 1000) {
        echo "Medio";
    } elseif ($precio <= 100 && $precio >= 0) {
        echo "Barato";
    } elseif ($precio < 0) {
        echo "Negativo";
    } else {
        echo "Error";
    }

    //Ejercicio 6
    echo "<h1>Ejercicio 6</h1>";

    $hora = 22;
    $minuto = 59;
    $segundo = 59;

    $segundo++;

    if ($segundo == 60) {
        $segundo = 0;
        $minuto++;
    }

    if ($minuto == 60) {
        $minuto = 0;
        $hora++;
    }

    if ($hora == 24) {
        $hora = 0;
    }

    echo "$hora:$minuto:$segundo";
    echo "<br>";

    //Ejercicio 7
    echo "<h1>Ejercicio 7</h1>";

    $num = 5;
    for ($i = 1; $i <= $num; $i++) {
        if ($i == 5) {
            echo "$i";
        } else {
            echo "$i, ";
        }
    }
    echo "<br>";

    //Ejercicio 8
    echo "<h1>Ejercicio 8</h1>";

    echo "<ul>";
    for ($i = 9; $i <= 15; $i++) {
        echo "<li>$i</li>";
    }
    echo "</ul>";
    echo "<br>";

    //Ejercicio 9
    echo "<h1>Ejercicio 9</h1>";

    $num = 10;
    for ($i = 0; $i <= $num; $i++) {
        if ($i % 2 == 0) {
            if ($i == $num) {
                echo "$i";
            } else {
                echo "$i, ";
            }
        }
    }
    echo "<br>";

    //Ejercicio 10
    echo "<h1>Ejercicio 10</h1>";

    echo "<ol>";
    for ($i = 50; $i >= 20; $i--) {
        if (!($i % 3 == 0) && !($i % 7 == 0)) {
            echo "<li>$i</li>";
        }
    }
    echo "</ol>";
    echo "<br>";

    //Ejercicio 11
    echo "<h1>Ejercicio 11</h1>";

    $sol = 0;
    for ($i = 0; $i < 11; $i++) {
        $sol += $i;
    }
    echo "$sol";
    echo "<br>";

    //Ejercicio 12
    echo "<h1>Ejercicio 12</h1>";

    $n = 5;
    $res = 1;
    for ($i = 1; $i <= $n; $i++) {
        $res *= $i;
    }
    echo $res;
    echo "<br>";

    //Ejercicio 13
    echo "<h1>Ejercicio 13</h1>";

    $base = 4;
    $exponente = 3;
    $res = 1;
    for ($i = 1; $i <= $exponente; $i++) {
        $res *= $base;
    }
    echo $res;

    //Ejercicio 14
    echo "<h1>Ejercicio 14</h1>";

    $base = 4;
    $exponente = 3;
    $res = 1;
    $cont = 0;
    while ($cont < $exponente) {
        $res *= $base;
        $cont++;
    }
    echo $res;
    echo "<br>";

    //Ejercicio 15
    echo "<h1>Ejercicio 15</h1>";

    echo "<table>";
    echo "<tr>";
    echo "<th>a</th>";
    echo "<th>b</th>";
    echo "<th>resultado</th>";
    echo "</tr>";
    $num = 7;
    for ($i = 0; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>$num</td>";
        echo "<td>$i</td>";
        echo "<td>" . $num * $i . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";

    //Ejercicio 16
    echo "<h1>Ejercicio 16</h1>";

    $num1 = 1;
    $num2 = 0;
    $res = 0;
    for ($i = 1; $i <= 20; $i++){
        $res = $num2;
        $num2 = $num1 + $num2;
        echo "$res, ";
        $num1 = $res; 
    }
    echo "<br>";

    //Ejercicio 17
    echo "<h1>Ejercicio 17</h1>";

    $fila = 5;
    $columna = 5;
    for ($i = 1; $i <= $fila; $i++) {
        for ($j = 1; $j <= $columna; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";

    //Ejercicio 18
    echo "<h1>Ejercicio 18</h1>";

    $filas = 2;
    for ($i = 1; $i <= $fila; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";

    //Ejercicio 19
    echo "<h1>Ejercicio 19</h1>";

    $filas = 2;
    for ($i = 1; $i <= $fila; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$j ";
        }
        echo "<br>";
    }
    echo "<br>";

    //Ejercicio 21
    echo "<h1>Ejercicio 21</h1>";
    $cadena = "  nicolas  ";
    var_dump($cadena);
    echo "<br>";

    $cadena = "  nicolas  ";
    $cadena = rtrim($cadena);
    var_dump($cadena);
    echo "<br>";

    $cadena = "  nicolas  ";
    $cadena = ltrim($cadena);
    var_dump($cadena);
    echo "<br>";

    $cadena = "  nicolas     ";
    $cadena = trim($cadena);
    var_dump($cadena);
    echo "<br>";

    $cadena = "  nicolas  ";
    $cadena = str_replace(" ", "", $cadena);
    var_dump($cadena);
    echo "<br>";
    ?>
</body>

</html>