<?php
function filterByType($numbers, $type)
{
    $type = strtolower($type);
    if ($type == "par") {
        $pares = [];
        for ($i = 0; $i < count($numbers); $i++) {
            if ($numbers[$i] % 2 == 0) {
                $pares[$i] = $numbers[$i];
            }
        }
        return $pares;
    } else if ($type == "impar") {
        $impares = [];
        for ($i = 0; $i < count($numbers); $i++) {
            if ($numbers[$i] % 2 == 1) {
                $impares[$i] = $numbers[$i];
            }
        }
        return $impares;
    } else if ($type == "primo") {
        $primos = [];
        for ($i = 2; $i < count($numbers); $i++) {
            $esPrimo = true;
            if ($numbers[$i] < 2) {
                $esPrimo = false;
            } else {
                for ($j = 2; $j < $i; $j++) {
                    if ($numbers[$i] % $j == 0) {
                        $esPrimo = false;
                    }
                }
            }
            if ($esPrimo) {
                $primos[$i] = $numbers[$i];
            }
        }
        return $primos;
    } else if ($type == "negativo") {
        $negativos = [];
        for ($i = 0; $i < count($numbers); $i++) {
            if ($numbers[$i] < 0) {
                $negativos[$i] = $numbers[$i];
            }
        }
        return $negativos;
    } else {
        echo "Error, la opcion ingresada no existe ";
    }
}

function calculateStadistics($numbers)
{
    $sum = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $sum += $numbers[$i];
    }
    $avg = $sum / count($numbers);

    $mediana = 0;
    asort($numbers);
    for ($i = 0; $i < count($numbers); $i++) {
        if (count($numbers) % 2 == 1) {
            $medio = count($numbers) / 2 - 0.5;
            $mediana = $numbers[$medio];
        } else {
            $medio = count($numbers) / 2;
            $medio2 = $medio - 1;
            $mediana = ($numbers[$medio] + $numbers[$medio2]) / 2;
        }
    }

    $max = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $cont = 0;
        for ($j = 0; $j < count($numbers); $j++) {
            if ($numbers[$i] == $numbers[$j]) {
                $cont++;
            }
        }

        if ($cont > $max) {
            $max = $cont;
        }
    }

    return [
        "media" => $avg,
        "mediana" => $mediana,
        "moda" => $max,
    ];
}

function analizarPalabras($text)
{
    $palabras = preg_split("/\s+/", $text);

    $number_of_words = count($palabras);
    $longest_word = '';
    $shortest_word = '';

    foreach ($palabras as $palabra) {
        $numLetras = strlen($palabra);
        if ($numLetras > strlen($longest_word)) {
            $longest_word = $palabra;
        }
        if ($shortest_word === '' || $numLetras < strlen($shortest_word)) {
            $shortest_word = $palabra;
        }
    }

    return [
        'number_of_words' => $number_of_words,
        'longest_word' => $longest_word,
        'shortest_word' => $shortest_word
    ];
}

function convertTemperature($temperature, $origin = "celsius", $destination = "fahrenheit")
{
    $temperatureFinal = 0;
    if ($origin == "celsius" && $destination == "fahrenheit") {
        $temperatureFinal = ($temperature * 9 / 5) + 32;
        return $temperatureFinal;
    } else if ($origin == "celsius" && $destination == "kelvin") {
        $temperatureFinal = $temperature + 273.15;
        return $temperatureFinal;
    } else if ($origin == "fahrenheit" && $destination == "celsius") {
        $temperatureFinal = ($temperature - 32) * 5 / 9;
        return $temperatureFinal;
    } else if ($origin == "fahrenheit" && $destination == "kelvin") {
        $temperatureFinal = ($temperature - 32) * 5 / 9 + 273.15;
        return $temperatureFinal;
    } else if ($origin == "kelvin" && $destination == "celsius") {
        $temperatureFinal = $temperature - 273.15;
        return $temperatureFinal;
    } else if ($origin == "kelvin" && $destination == "fahrenheit") {
        $temperatureFinal = ($temperature - 273.15) * 9 / 5 + 32;
        return $temperatureFinal;
    } else {
        return false;
    }
}


/*
La funcion recibe como parametro un valor minimo y un array asociativo de productos
con su nombre y precio de cada uno, la funcion lo que hace es filtrar cual producto
cumple la condicion de costar igual o menos que el valor minimo recibido al inicio.

Devuelve un array asociativo con los productos los cuales podria "comprar" el usuario
con el valor minimo que se ingreso anteriormente
*/
function filterMinValue($minValue, $products) {
    $finalProducts = [];

    foreach ($products as $name => $price) {
        if($minValue >= $price){
            $finalProducts[$name] = $price;
        }
    }
    return $finalProducts;
}
?>