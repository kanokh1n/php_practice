<?php

function average(...$numbers) {
    if (empty($numbers)) return null;
    
    return array_sum($numbers) / count($numbers);
}

function union(...$arrays) {
    $result = [];
    foreach ($arrays as $array) {
        if (!is_array($array)) continue;
        
        foreach ($array as $value) {
            $result[] = $value;
        }
    }
    return array_unique($result);
}

print_r(average(0)); // 0
print_r(average(0, 10));
print_r(average(-3, 4, 2, 10));
print_r(average());

print_r(union([3]));
print_r(union([3, 2], [2, 2, 1]));
print_r(union(['a', 3, false], [true, false, 3], [false, 5, 8]));