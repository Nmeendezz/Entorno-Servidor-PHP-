<?php

function basicStadistics(...$nums)
{
    if (count($nums) >= 1) {
        $sum = 0;
        for ($i = 0; $i < count($nums); $i++) {
            $sum += $nums[$i];
        }

        $max = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] > $max) {
                $max = $nums[$i];
            }
        }

        $min = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] < $min) {
                $min = $nums[$i];
            }
        }

        $avg = $sum / count($nums);

        $nevatives = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] < 0) {
                $nevatives++;
            }
        }

        $odd = [];
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] % 2 != 0) {
                $odd[] = $nums[$i];
            }
        }

        return [
            "sum" => $sum,
            "max" => $max,
            "min" => $min,
            "avg" => $avg,
            "odd" => $odd,
            "neg" => $nevatives,
        ];

    } else {
        return false;
    }


}

function operations($numbers, $operation = "order", $incremental = true)
{
    if ($operation == "order") {
        if ($incremental) {
            arsort($numbers);
        } else {
            asort($numbers);
        }
        return $numbers;
    } else if ($operation == "sum") {
        $sum = 0;
        for ($i = 0; $i < count($numbers); $i++) {
            $sum += $numbers[$i];
        }
        return $sum;
    } else if ($operation == "product") {
        $plus = 1;
        for ($i = 0; $i < count($numbers); $i++) {
            $plus *= $numbers[$i];
        }
        return $plus;
    }
}