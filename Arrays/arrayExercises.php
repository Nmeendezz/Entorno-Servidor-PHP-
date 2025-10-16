<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Exercises</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    /*
    //Ejercicio 1
    echo "<h1>Ejercicio 1</h1>";

    $aleatorios = [];
    for ($i = 0; $i < 20; $i++) {
        $aleatorios[$i] = mt_rand(10, 50);
    }
    echo "<p>";
    for ($i = 0; $i < count($aleatorios); $i++) {
        if ($i == count($aleatorios) - 1) {
            echo "$aleatorios[$i]";
        } else {
            echo "$aleatorios[$i], ";
        }
    }
    echo "</p>";

    //Ejercicio 2
    echo "<h1>Ejercicio 2</h1>";

    $sum = 0;
    for ($i = 0; $i < count($aleatorios); $i++) {
        $sum += $aleatorios[$i];
    }
    echo $sum;
    echo "<br>";

    $avg = $sum / count($aleatorios);
    echo $avg;
    echo "<br>";

    $max = 1;
    for ($i = 0; $i < count($aleatorios); $i++) {
        if ($aleatorios[$i] > $max) {
            $max = $aleatorios[$i];
        }
    }

    $min = $max;
    for ($i = 0; $i < count($aleatorios); $i++) {
        if ($aleatorios[$i] < $min) {
            $min = $aleatorios[$i];
        }
    }
    echo "El numero maximo es $max y el minimo es $min";

    //Ejercicio 3
    echo "<h1>Ejercicio 3</h1>";

    $alturas = [
        "Pablo" => 174,
        "Pedro" => 180,
        "Lucia" => 169,
        "Diana" => 165
    ];

    echo "<table>";
    echo "<tr>";
    echo "<th>Nombres</th>";
    echo "<th>Alturas</th>";
    echo "</tr>";
    foreach ($alturas as $nombre => $altura) {
        echo "<tr>";
        echo "<td>$nombre</td>";
        echo "<td>$altura</td>";
        echo "</tr>";
    }
    $suma = 0;
    $cont = 0;
    foreach ($alturas as $nombre => $altura) {
        $suma += $altura;
        $cont++;
    }
    echo "<tr>";
    echo "<td colspan=2>Media de alturas: " . $suma / $cont . "</td>";
    echo "</tr>";

    echo "</table>";

    //Ejercicio 4
    echo "<h1>Ejercicio 4</h1>";

    $numeros = [];
    for ($i = 0; $i < 10; $i++) {
        $numeros[$i] = mt_rand(0, 100);
    }

    $cuadrados = [];
    for ($i = 0; $i < 10; $i++) {
        $cuadrados[$i] = $numeros[$i] * $numeros[$i];
    }

    $cubos = [];
    for ($i = 0; $i < 10; $i++) {
        $cubos[$i] = $cuadrados[$i] * $numeros[$i];
    }

    echo "<table>";
    echo "<tr>";
    echo "<th>Valor</th>";
    echo "<th>Cuadrado</th>";
    echo "<th>Cubo</th>";
    echo "</tr>";
    for ($i = 0; $i < count($numeros); $i++) {
        echo "<tr>";
        echo "<td>";
        echo $numeros[$i];
        echo "</td>";
        echo "<td>";
        echo $cuadrados[$i];
        echo "</td>";
        echo "<td>";
        echo $cubos[$i];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

    //Ejercicio 5
    echo "<h1>Ejercicio 5</h1>";

    $alumnado = [
        "Fatima",
        "Alberto",
        "Amir",
        "Santiago"
    ];
    $notas = [
        7.8,
        4.1,
        6.8,
        3.3
    ];
    $matriculas = [
        true,
        true,
        false,
        false
    ];

    echo "<ul>";
    for ($i = 0; $i < count($alumnado); $i++) {
        echo "<li>";
        if ($matriculas[$i] == true) {
            echo "$alumnado[$i] tiene un $notas[$i] y si esta matriculade";
        } else {
            echo "$alumnado[$i] tiene un $notas[$i] y no esta matriculade";
        }
        echo "</li>";
    }
    echo "</ul>";

    //Ejercicio 6
    echo "<h1>Ejercicio 6</h1>";

    $temperaturas = [
        "Enero" => "14.8",
        "Febrero" => "19",
        "Marzo" => "25.2",
        "Abril" => "30.9",
        "Mayo" => "29.1",
        "Junio" => "37",
        "Julio" => "38.7",
        "Agosto" => "40",
        "Septiembre" => "31.6",
        "Octubre" => "30.1",
        "Noviembre" => "18.6",
        "Diciembre" => "13.1",
    ];

    echo "<table>";
    echo "<tr>";
    foreach ($temperaturas as $mes => $temperatura) {
        echo "<th>$mes</th>";
    }
    echo "</tr>";

    echo "<tr>";
    foreach ($temperaturas as $mes => $temperatura) {
        echo "<td>$temperatura</td>";
    }
    echo "</table>";

    //Ejercicio 7
    echo "<h1>Ejercicio 7</h1>";
    echo "<table class=\"temperaturas\">";

    foreach ($temperaturas as $mes => $temperatura) {
        echo "<tr>";
        echo "<th>$mes</th>";
        echo "<td class=\"temperaturas\">";
        while ($temperatura >= 1) {
            echo " - ";
            $temperatura--;
        }
        echo "</td class=\"temperaturas\">";
        echo "</tr>";
    }
    echo "</table>";


    //Ejercicio 8
    echo "<h1>Ejercicio 8</h1>";

    $temperaturas2 = [
        "Enero" => [14.8, -1.8],
        "Febrero" => [19, -1.8],
        "Marzo" => [25.2, -1.6],
        "Abril" => [30.9, 5.1],
        "Mayo" => [29.1, 8.3],
        "Junio" => [37, 13.4],
        "Julio" => [38.7, 17.4],
        "Agosto" => [40, 15.1],
        "Septiembre" => [31.6, 10.7],
        "Octubre" => [30.1, 7.5],
        "Noviembre" => [18.6, 3],
        "Diciembre" => [13.1, -0.2],
    ];

    echo "<table>";
    echo "<tr>";
    echo "<th>Mes</th>";
    echo "<th>Max</th>";
    echo "<th>Min</th>";
    echo "</tr>";
    foreach ($temperaturas2 as $mes => $temperatura) {
        echo "<tr>";
        echo "<td>$mes</td>";

        echo "<td>";
        echo $temperatura[0];
        echo "</td>";

        echo "<td>";
        echo $temperatura[1];
        echo "</td>";

        echo "</tr>";
    }
    echo "</table>";

    //Ejercicio 9

    $palos = ["Oros", "Copas", "Espadas", "Bastos"];

    $numeros = [
        [1, 11],
        [2, 0],
        [3, 10],
        [4, 0],
        [5, 0],
        [6, 0],
        [7, 0],
        [8, 0],
        [9, 0],
        [10, 2],
        [11, 3],
        [12, 4],
    ];

    $sum = 0;
    for ($i = 0; $i < 10; $i++) {
        $paloIndex = mt_rand(0, count($palos) -1);
        $numIndex = mt_rand(0, count($numeros) -1);

        $cartas[] = $numeros[$numIndex][0] . " de " . $palos[$paloIndex] . " que equivale a " . $numeros[$numIndex][1] . " puntos";
        $sum += $numeros[$numIndex][1];

    }

    foreach ($cartas as $carta) {
        echo "<p>$carta</p>";
    }
    echo "Su puntaje total es $sum puntos";



    //Ejercicio 10

    $palos = ["Oros", "Copas", "Espadas", "Bastos"];

    $numeros = [
        [1, 11],
        [2, 0],
        [3, 10],
        [4, 0],
        [5, 0],
        [6, 0],
        [7, 0],
        [8, 0],
        [9, 0],
        [10, 2],
        [11, 3],
        [12, 4],
    ];

    $sum = 0;
    for ($i = 0; $i < 10; $i++) {
        $paloIndex = mt_rand(0, count($palos) - 1);
        $numIndex = mt_rand(0, count($numeros) - 1);

        $carta = $numeros[$numIndex][0] . " de " . $palos[$paloIndex] . " que equivale a " . $numeros[$numIndex][1] . " puntos";
        while ($i != 0 and in_array($carta, $cartas)) {
            $numIndex = mt_rand(0, count($numeros) - 1);
            $paloIndex = mt_rand(0, count($palos) - 1);
            $carta = $numeros[$numIndex][0] . " de " . $palos[$paloIndex] . " que equivale a " . $numeros[$numIndex][1] . " puntos";
        }
        $cartas[] = $carta;
        $sum += $numeros[$numIndex][1];

    }

    foreach ($cartas as $carta) {
        echo "<p>$carta</p>";
    }
    echo "Su puntaje total es $sum puntos";

    //Ejercicio 11
    $words = [
        "Horizonte" => "Horizon",
        "LLave" => "Key",
        "Susurro" => "Whisper",
        "Relampago" => "Lightning",
        "Almohada" => "Pillow",
        "Jardin" => "Garden",
        "Brujula" => "Compass",
        "Espejo" => "Mirror",
        "Canela" => "Cinnamon",
        "Travesia" => "Journey",
    ];

    $keys = array_keys($words);
    $index = mt_rand(0, count($words) - 1);

    echo $keys[$index] . " significa " . $words[$keys[$index]];


    //Ejercicio 12
    $arr = [];

    for ($i = 0; $i < 100; $i++) {
        $random = mt_rand(0,100);

        while (in_array($random, $arr)) {
            $random = mt_rand(0,100);
        }

        $arr[] = $random;
    }

    $bid = [];
    $index = 0;
    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 10; $j++) {
            $bid[$i][$j] = $arr[$index];
            $index++;
        }
    }

    echo "<table>";
    for ($i = 0; $i < 10; $i++){
        echo"<tr>";
        for ($j = 0; $j < 10; $j++) {
            echo "<td>" . $bid[$i][$j] . "</td>";
        }
        echo"</tr>";
    }
    echo"</table>";


    //Ejercicio 13

    $estudiantes = [
        [
            "nombre" => "Ana García",
            "matematicas" => 8.5,
            "historia" => 7.0,
            "programacion" => 9.0
        ],
        [
            "nombre" => "Luis Martínez",
            "matematicas" => 6.0,
            "historia" => 8.5,
            "programacion" => 7.5
        ],
        [
            "nombre" => "Marta Rodríguez",
            "matematicas" => 9.0,
            "historia" => 6.5,
            "programacion" => 8.0
        ],
        [
            "nombre" => "Carlos López",
            "matematicas" => 7.5,
            "historia" => 9.0,
            "programacion" => 6.5
        ],
        [
            "nombre" => "Elena Torres",
            "matematicas" => 8.0,
            "historia" => 7.5,
            "programacion" => 9.5
        ]
    ];

    ?>

    <h1>1.</h1>

    <?php
    $avg = 0;
    for ($i = 0; $i < count($estudiantes); $i++) {
        $avg = ($estudiantes[$i]["matematicas"] + $estudiantes[$i]["historia"] + $estudiantes[$i]["programacion"]) / 3;
        $estudiantes[$i]["media"] = $avg;
    }

    var_dump($estudiantes);

    ?>

    <h1>2.</h1>

    <?php
    $max = 0;
    for ($i = 0; $i < count($estudiantes); $i++) {
        if ($avg > $max) {
            $max = $estudiantes[$i]["media"];
            $name = $estudiantes[$i]["nombre"];
        }
    }

    echo "El estudiante con el promedio mas alto es $name con un promedio de $max";

    ?>

    <h1>3.</h1>

    <?php
    $math = 0;
    $history = 0;
    $programation = 0;
    for ($i = 0; $i < count($estudiantes); $i++) {
        $gradeMath = $estudiantes[$i]["matematicas"];
        $gradeHistory = $estudiantes[$i]["historia"];
        $gradeProgramation = $estudiantes[$i]["programacion"];

        if ($gradeMath >= 7) {
            $math++;
        }
        if ($gradeHistory >= 7) {
            $history++;
        }
        if ($gradeProgramation >= 7) {
            $programation++;
        }
    }
    var_dump($math);
    var_dump($history);
    var_dump($programation);
    ?>

    <h1>4.</h1>

    <?php
    $asignatureMax = [
        "matematicas" => 0,
        "historia" => 0,
        "programacion" => 0,
    ];
    $mathMax = 0;
    $historyMax = 0;
    $programationMax = 0;

    for ($i = 0; $i < count($estudiantes); $i++) {
        if ($estudiantes[$i]["matematicas"] > $mathMax) {
            $mathMax = $estudiantes[$i]["matematicas"];
            $asignatureMax["matematicas"] = $mathMax;
        }
        if ($estudiantes[$i]["historia"] > $historyMax) {
            $historyMax = $estudiantes[$i]["historia"];
            $asignatureMax["historia"] = $historyMax;
        }
        if ($estudiantes[$i]["programacion"] > $programationMax) {
            $programationMax = $estudiantes[$i]["programacion"];
            $asignatureMax["programacion"] = $programationMax;
        }
    }
    var_dump($asignatureMax);

    ?>

    <h1>5.</h1>

    <?php
    $avg = 0;

    $media = [];
    for ($i = 0; $i < count($estudiantes); $i++) {
        $media[$i] = $estudiantes[$i]["media"];
    }

    for ($i = 0; $i < count($media); $i++) {
        for ($j = 0; $j < count($media) - 1 - $i; $j++) {
            if ($media[$j] < $media[$j + 1]) {
                $num = $media[$j + 1];
                $media[$j + 1] = $media[$j];
                $media[$j] = $num;
            }
        }
    }

    var_dump($media);
    */
    ?>

    <?php
    //Ejercicio 14
    
    $hotel = [
        "habitaciones" => [
            101 => ["tipo" => "individual", "precio" => 50, "ocupada" => false, "dias_ocupada" => 0],
            102 => ["tipo" => "doble", "precio" => 80, "ocupada" => true, "dias_ocupada" => 3],
            103 => ["tipo" => "suite", "precio" => 150, "ocupada" => false, "dias_ocupada" => 0],
            201 => ["tipo" => "individual", "precio" => 50, "ocupada" => true, "dias_ocupada" => 5],
            202 => ["tipo" => "doble", "precio" => 80, "ocupada" => false, "dias_ocupada" => 0],
            203 => ["tipo" => "suite", "precio" => 150, "ocupada" => true, "dias_ocupada" => 2]
        ],
        "reservas" => [
            ["habitacion" => 102, "cliente" => "Juan Pérez", "dias" => 3],
            ["habitacion" => 201, "cliente" => "María López", "dias" => 5],
            ["habitacion" => 203, "cliente" => "Carlos Ruiz", "dias" => 2]
        ]
    ];

    ?>

    <h1>1.</h1>

    <?php

    foreach ($hotel['habitaciones'] as $numero => $info) {
        if ($hotel['habitaciones'][$numero]["ocupada"] == true && $hotel['habitaciones'][$numero]["tipo"] == "individual") {
            var_dump($hotel['habitaciones'][$numero]);
            echo "<br>";
            echo $numero;
        }
    }

    ?>

    <h1>2.</h1>

    <?php
    $sum = 0;
    foreach ($hotel['habitaciones'] as $numero => $info) {
        if ($hotel['habitaciones'][$numero]["ocupada"] == true) {
            $sum += $hotel["habitaciones"][$numero]["precio"];
        }
    }
    var_dump($sum);
    ?>

    <h1>3.</h1>

    <?php
    $habitacion;
    $libre = false;
    foreach ($hotel["habitaciones"] as $numero => $info) {
        while ($libre == false) {
            if ($hotel['habitaciones'][$numero]["ocupada"] == false) {
                $habitacion = $numero;
                $libre = true;

            }
        }
    }

    $hotel['habitaciones'][$habitacion]["ocupada"] = true;
    $hotel['habitaciones'][$habitacion]["dias_ocupada"] = 3;

    $hotel['reservas']["habitacion"] = $habitacion;
    $hotel['reservas']["cliente"] = "Elsa Pato";
    $hotel['reservas']["dias"] = 3;

    var_dump($hotel['reservas']);
    echo '<br>';
    var_dump($hotel['habitaciones']);


    ?>
</body>

</html>