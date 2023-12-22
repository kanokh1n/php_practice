<?php

function calculateAverage($array)
{
    if(!$array) return 0;

    return array_sum($array) / count($array);
}

$temperatures = [];

print_r(calculateAverage($temperatures)); // 38.5