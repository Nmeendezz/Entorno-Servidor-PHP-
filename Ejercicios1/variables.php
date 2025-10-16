<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables en PHP</title>
</head>
<body>
    <?php
        //Bool
        $underAge = true;
        $type = gettype( $underAge); //Devuelve un string con el tipo de la variable
        echo $type;
        echo "<br>";

        //Int
        $number = 14;
        echo gettype( $number );
        echo "<br>";

        //Float
        $decimal = 14.1;
        var_dump( $decimal ); //Imprime el tipo y el valor
        echo "<br>";

        //String   
        $string = "cadena de texto";
        var_dump ( $string );
        echo "<br>";

        $string = $string . " mas una concatenacion"; //Concatenar dos cadenas de texto
        var_dump( $string );
        echo "<br>";

        //Constantes
        const GROUP = "2DAW";
        echo "el grupo es " . GROUP;
        echo "<br>";

        $mod = 5 % 2; // Modulo

        $pow = 4 ** 3;
        var_dump( $pow );
        echo "<br>";

        //Incrementos
        $a = 4;
        $a++;
        var_dump( $a );
        echo "<br>";
        ++$a;
        var_dump( $a );

        echo "<br>";
        echo "<br>";
        $x = 5;
        $y = ++$x;
        echo "x = $x";
        echo "<br>";
        echo "y = $y";
        echo "<br>";

        $age = 9;
        echo "La edad es " . $age++ . "<br>"; //Sale 9 porque se imprime y ya luego se incrementa
        echo "Ahora la edad es " . $age . "<br>" //Sale 10 porque ya esta sumado

        
        
    ?>
</body>
</html>