<?php
// Funcion para saludar que puede recibir solamente el nombre (muestra "hola $nombre"),
// o el nombre y el tipo de saludo (muestra  $saludo $nombre)
// public static String saludar(String nombre){
//      return saludar(
//      nombre, "hola    
//      );
// } 
// public static String saludar(String nombre, String saludo){
//      return saludo + " " + nombre
// } 
// Esto en java se conoce como sobreescritura de funciones. en PHP NO EXISTE

// En php: parametros con valores por defecto
function salute($name, $salute = "Hola"): string
{
    return $salute . " " . $name;
}


// Devuelve como string lo que le digamos como parametro dentro de las etiquetas que indiquemos(p si no indicamos nada)
// @param string $tag etiquetas en las que envolver el elemento. Si no se indica ninguna, que sea <p>por defecto</p>
// @param string $element cadena de texto a envolver entre las tags html
// @return string con el elemento rodeado de las tags indicadas

function intohtml($element, $tag = "p")
{
    return "<$tag>$element</$tag>";
}

//Los parametros opcionales se ponen al final
function matricula($student, $school, $course = "DAW", $year = 2025)
{
    return "$student se ha matriculado en $course en $year en el $school";
}

function addOne($num)
{
    $num++;
    return $num;
}

function subtract($firstNumber, ...$numbers)
{
    $result = $firstNumber;
    foreach ($numbers as $number) {
        $result -= $number;
    }
    return $result;
}

function concat(...$texts)
{
    $result = "";
    foreach ($texts as $word) {
        $result .= $word;
    }
    return $result;
}

function concat2(...$texts)
{
    if (count($texts) < 0) {
        return false;
    }
    $result = "";
    foreach ($texts as $word) {
        $result .= $word;
    }
    return $result;
}
?>