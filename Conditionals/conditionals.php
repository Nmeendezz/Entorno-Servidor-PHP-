<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
    <style>
        table, th, td{
            border: solid 1px;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        //Condicionales
        $age = 25;
        if ($age > 30) {
            echo "<p>No tienes abono joven</p>";
        } else {
            echo "<p>Si tienes abono joven</p>";
        }

        $age = 4;
        if ($age < 3){
            echo "<p>Bebe</p>";
        } else if($age <10){
            echo "<p>Infantil</p>";
        } else {
            echo "<p>Mayor de 10 años</p>";
        }

        $dia = 2;
        switch ($dia) {
            case 1: 
                echo "<p>Lunes</p>";
                break;
            case 2: 
                echo "<p>Martes</p>";
                break;
            case 3: 
                echo "<p>Miercoles</p>";
                break;
            case 4: 
                echo "<p>Jueves</p>";
                break;
            default: 
                echo "<p>Fin de Semana</p>";
        }

        //Si la edad esta entre 5 y 12 años (incluido), que salga el mensaje "estas en el colegio"
        $age = 17;
        if ($age >= 5 && $age <= 12){
            echo "<p>Estas en el colegio</p>";
        } else if ($age < 5 && $age >= 3){
            echo "<p>Estas en la guarderia</p>";
        } else if ($age > 12 && $age <= 18){
            echo "<p>Estas en el instituto</p>";
        } else if ($age > 18) {
            echo "<p>Estas en la universidad</p>";
        }else{
            echo "<p>No estas estudiando</p>";
        }

        $number = 5;
        if ($number > 3 && $number < 5){
            echo "<p>A</p>";
        } else{
            echo "<p>B</p>";
        }

        $number = 7;
        if (!$number == 7){
            echo "<p>A</p>";
        } else{
            echo "<p>B</p>";
        }

        //Operador ternario
        $age = 4;
        $underAge = false;
        if($age >= 18){
            $underAge = false;
        } else {
            $underAge = true;
        }

        var_dump($underAge);

        //Operador ternario: (condicion) ? instruccionSiTrue : instruccionSiFalse;
        $underAge = ($age >= 18) ? false : true;
    ?>

    <h1>BUCLES</h1>
    <?php
        //for, foreach, while, do-while
        //FOR: for(inicializacion; condicion; incremento)
        //for(int i = 0; i < 9; i++)(instrucciones)

        //Bucle que imprima los numeros del 0 al 9
        for ($i = 0; $i < 10; $i++) {
            echo "<p>$i</p>";
        }

        echo "<p>";
        for ($i = 0; $i < 10; $i++){
            if($i % 2 == 0){
                echo "$i<br>";
            }
        }
        echo "</p>";

        //While
        // Trasnforma este bucle en un while:
        // echo "<p>";
        // for ($i = 0; $i < 10; $i++) {
        //    echo "$i";
        //  }
        //echo "</p>";

        $number = 0;
        echo "<p>"; 
        while ($number < 10) {
            echo "$number";
            $number++;
        }
        echo "</p>";

        echo "<p>";
        $i = 11;
        do{
            echo "$i";
            $i++;
        } while ($i < 10);
        echo "</p>";

        //Imprime por pantalla los numeros del 1 al 5 (incluidos) dentro de una lista html no ordenada
        echo "<p>Lista no ordenada: </p>";
        echo "<ul>";
        for ($i = 1; $i <= 5; $i++){
            echo "<li>$i</li>";
        }
        echo "</ul>";

        //Imprime en una tabla de valores de 
        $course1 = "DEWS";
        $course2 = "DWEC";
        $course3 = "DIW";
        $teacher1 = "Sete";
        $teacher2 = "Diego";
        $teacher3 = "Marco";

        echo "<table>";
            echo "<tr>";
                echo "<th>Asignatura</th>";
                echo "<th>Profe</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>$course1</td>";
                echo "<td>$teacher1</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>$course2</td>";
                echo "<td>$teacher2</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>$course3</td>";
                echo "<td>$teacher3</td>";
            echo "</tr>";
        echo "</table>";
        echo "<br>";

        $num = 0;
        $num2 = 0;

        echo "<table>";
        echo "<tr>";
                echo "<th>Numeros</th>";
                echo "<th>Numero x 2</th>";
            echo "</tr>";
            while($num < 11){
                echo "<tr>";
                    echo "<td>$num</td>";
                    echo "<td>$num2</td>";
                echo "</tr>";
                $num++;
                $num2 = $num * 2;
            }
        echo "</table>";
        echo "<br>";

        

        echo "<table>";
        echo "<tr>";
                echo "<th>Numeros</th>";
                echo "<th>¿Es par?</th>";
            echo "</tr>";
            $num = 0;
            $par;
            while($num < 11){
                if($num % 2 == 0){
                    $par = "Si" ;
                } else {
                    $par = "No";
                }
                echo "<tr>";
                    echo "<td>$num</td>";
                    echo "<td>$par</td>";
                echo "</tr>";
                $num++;
            }
        echo "</table>";


        //Bucles anidados

        /* Imprime los numeros
        1  2  3  4
        5  6  7  8
        9 10 11 12
        */
        echo "<h1>Bucles anidados</h1>";
        for ($i = 0; $i <= 2; $i++){
            for ($j = 0; $j <= 3; $j++){
                echo "a";
            }
            echo "<br>";
        }
        echo "<br>";

        /* Imprime los numeros
        0  0  0  0  0
        1  1  1  1  1
        2  2  2  2  2
        */
        for ($i = 0; $i < 3; $i++){
            for ($j = 0; $j < 5; $j++){
                echo "$i ";
            }
            echo "<br>";
        }
        echo "<br>";

        /* Imprime los numeros
        0  1  2  3  4  5
        0  1  2  3  4  5
        0  1  2  3  4  5
        */

        for ($i = 0; $i < 3; $i++){
            for ($j = 0; $j < 6; $j++){
                echo "$j ";
            }
            echo "<br>";
        }
        echo "<br>";

        /* Imprime los numeros
        0   1   2   3   4  
        5   6   7   8   9
        10  11  12  13  14
        15  16  17  18  19
        20  21  22  23  24
        */

        $newJ = 0;
        for ($i = 0; $i < 5; $i++){
            for ($j = 0; $j < 5; $j++){
                echo "$newJ ";
                $newJ ++;
            }
            echo "<br>";
        }
        echo "<br>";

        /* Imprime los numeros en un table
        0   1   2   3   
        3   4   5   6
        6   7   8   9
        9   10  11  12
        12  13  14  15
        */

        echo "<table>";
            $newJ = 0;
            for ($i = 0; $i < 5; $i++){
                echo "<tr>";
                for ($j = 0; $j < 4; $j++){
                    echo "<td>$newJ </td>";
                    $newJ ++;
                }
                $newJ--;
                echo "</tr>";
            }
            echo "<br>";
        echo "</table>";
    ?>
</body>
</html>