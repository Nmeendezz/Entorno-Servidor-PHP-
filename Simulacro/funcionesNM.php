<?php
function promedio(...$nums)
{
    if (count($nums) >= 1) {
        $sum = 0;
        for ($i = 0; $i < count($nums); $i++) {
            $sum += $nums[$i];
        }
        echo "El promedio es " . $sum / count(($nums));
    } else {
        return false;
    }
}

function potencia($base, $exponente = 2)
{
    $res = 1;
    for ($i = 0; $i < $exponente; $i++) {
        $res *= $base;
    }
    return $res;
}
?>