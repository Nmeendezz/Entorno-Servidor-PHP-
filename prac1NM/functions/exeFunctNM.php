<?php
//Recibe un Array de notas y devuelve la media de las notas
function promedio($notas)
{
    $suma = 0;
    for ($i = 0; $i < count($notas); $i++) {
        $suma += $notas[$i];
    }
    return $suma / count($notas);
}

//Verifica que la media sea mayor a 5 y devolvera true, de lo contrario devolvera false
function aprobado($promedio)
{
    if ($promedio >= 5) {
        return true;
    } else {
        return false;
    }
}
?>