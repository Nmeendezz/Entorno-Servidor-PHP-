<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <h3>Arrays indexados</h3>
    <?php
    //Para declarar
    //1. Con la funcion array()...$values)
    $ages = array(25, 19, 42);
    echo "<p>En la posicion 0 esta el numero $ages[0]</p>";
    echo "<p>En la posicion 1 esta el numero $ages[1]</p>";
    echo "<p>En la posicion 2 esta el numero $ages[2]</p>";

    //Para saber la longitud count() del array
    echo "<p>Numero de elementos del array son " . count($ages) . "</p>";

    //2. Directamente metiendo los valores en posiciones
    $names[0] = "Juan";
    $names[1] = "Lucia";
    //Para añadir al final basta con poner []
    $names[] = "Luz";

    //3. Otra forma
    $courses = ["DWES", "DWEC", "DIW"];

    //Recorrer:
    echo ("<h1>Recorrer</h1>");
    //Con un for
    for ($i = 0; $i < count($names); $i++) {
        echo "<p>$i . $names[$i] </p>";
    }
    //Con un foreach
    foreach ($names as $name) {
        echo "<p>$name</p>";
    }
    $ages[5] = 50; // Esto se puede hacer pero hay que tener cuidado al recorrerlo
    //En realidad lo que he hecho es convertirlo en un array asociativo
    $size = count($ages);
    var_dump($size);    //4
    for ($i = 0; $i < count($ages); $i++) {
        echo "<p>$ages[$i]</p>";
    }
    ?>

    <h3>Arrays asociativos</h3>
    <?php
    $students = [
        "123W" => "Javi",
        "356S" => "Luz",
        "513P" => "Alberto"
    ];
    //Quiero acceder al nombre "Luz"
    var_dump($students["356S"]);

    //Añadir un nuevo elemento
    $students["432W"] = "Maria";
    var_dump($students);
    echo ("<br>");

    //Modificar un elemento
    $students["123W"] = "Juan";
    var_dump($students);
    echo ("<br>");

    $school = [
        "DEWS" => "Diego",
        "DEWC" => "Sete",
        "DIW" => "Marco"
    ];
    var_dump($school);

    echo ("<h1>Profes:</h1>");
    //Solo se puede recorrer un array asociativo con un foreach
    foreach ($school as $teacher) {
        echo "<p>$teacher</p>";
    }

    echo ("<h1>Profes y asignaturas:</h1>");
    foreach ($school as $asignature => $teacher) {
        echo "<p>$teacher dicta $asignature</p>";
    }

    //Un array asociativo
    echo ("<h1>Array asociativo</h1>");
    $towns = [
        "BOG" => "Bogota",
        "MAD" => "Madrid",
        "BCN" => "Barcelona",
        "MIA" => "Miami",
        "DOH" => "Doha",
        "LGW" => "Londres"
    ];
    foreach ($towns as $prefix => $town) {
        echo "<p>$town + $prefix </p>";
    }

    echo ("<h1>Ordenar</h1>");

    echo ("<h3>Ordenar por NOMBRES (menor a mayor)</h3>");
    //Ordenar un array por NOMBRES (menor a mayor)
    asort($towns);
    foreach ($towns as $prefix => $town) {
        echo "<p>$town + $prefix </p>";
    }
    echo ("<br>");

    echo ("<h3>Ordenar por NOMBRES (mayor a menor)</h3>");
    //Ordenar un array por NOMBRES (mayor a menor)
    arsort($towns);
    foreach ($towns as $prefix => $town) {
        echo "<p>$town + $prefix </p>";
    }
    echo ("<br>");

    echo ("<h3>Ordenar por CLAVE (menor a mayor)</h3>");
    //Ordenar un array por CLAVE (menor a mayor)
    ksort($towns);
    foreach ($towns as $prefix => $town) {
        echo "<p>$town + $prefix </p>";
    }
    echo ("<br>");

    echo ("<h3>Ordenar por CLAVE (mayor a menor)</h3>");
    //Ordenar un array por CLAVE (mayor a menor)
    krsort($towns);
    foreach ($towns as $prefix => $town) {
        echo "<p>$town + $prefix </p>";
    }
    echo ("<br>");

    //Buscar un valor
    if (in_array("Diego", $school)) {
        echo "SI";
    } else {
        echo "NO";
    }
    echo ("<br>");

    //Buscar si existe clave
    //No hay un metodo especifico para hacerlo
    if (in_array("DWES", array_keys($school))) {
        echo ("SI");
    } else {
        echo ("NO");
    }
    echo ("<br>");

    $keys = array_keys($school);
    //if(in_array("DWES", $keys)){...} Es lo mismo que lo de arriba
    
    //Otra forma isset($var) -> true si existe esa variable o false si no esta declarada
    echo ("<br><br><br><br>");
    if (isset($school["$computer"])) {
        echo ("SI");
    } else {
        echo ("NO"); //Sale que no porque la variable $computer no existe
    }
    echo ("<br>");

    //Quiero ver si existe la clave "Ingles" del array asociativo $school utilizando isset
    if (isset($school["Ingles"])) {
        echo ("SI");
    } else {
        echo ("NO");
    }
    ?>

    <h1>Arrays bidimensionales</h1>
    <?php
    $bid = array(
        array(5, 6, 7, 8),
        array(9, 10, 11, 12),
        array(13, 14, 15, 16)
    );

    //Otra forma de declararlo
    $bid2 = [
        [5, 6, 7, 8],
        [9, 10, 11, 12],
        [3, 14, 15, 16]
    ];


    //Acceder al valor 15
    var_dump($bid[2][2]);
    echo "<br>";

    //Recorrer con un for
    for ($i = 0; $i < count($bid); $i++) {
        for ($j = 0; $j < count($bid[$i]); $j++) {
            echo $bid[$i][$j] . " - ";
        }
    }

    //Recorrer con foreach($array as value)
    foreach ($bid as $value) {
        foreach ($value as $num) {
            echo $num ." - ";
        }
    }
    echo "<br>";
    ?>

    <h1>Array tridimensional</h1>
    <?php
    $DEWS = [
        [
            []
        ]
    ]
    ?>
</body>

</html>