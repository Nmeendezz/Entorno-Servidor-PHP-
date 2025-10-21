<?php
function multiplos($num1, $num2)
{
    if ($num1 < 0 || $num2 < 0) {
        return null;
    } else if ($num1 % $num2 == 0) {
        return true;
    } else {
        return false;
    }
}

function cadena($texto, ...$args)
{
    $texto = strtolower(trim($texto, " "));
    $letras = str_split($texto);
    
    $cont = 0;
    foreach ($args as $arg) {
        if (in_array(strtolower($arg), $letras)) {
            $cont++;
        }
    }

    if ($cont == count($args)) {
        return 1;
    } else if ($cont >= 1 && $cont < count($args)) {
        return 0;
    } else {
        return -1;
    }

}

function printBidimensional($numbers)
{
    for ($i = 0; $i < count($numbers); $i++) {
        for ($j = 0; $j < count($numbers); $j++) {
            echo [$i][$j] . " ";
        }
        echo "<br>";
    }
}
?>