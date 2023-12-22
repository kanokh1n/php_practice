<?php

function getSameParity($array)
{
    $newArray = [];
    $count = 0;
    if($array) {
        for ($i = 0; $i < count($array); $i++) {
            if ($array[0] % 2 == $array[$i] % 2) {
                $newArray[$count] = $array[$i];
                $count++;
            } else if ($array[0] % 2 != 0 && $array[$i] % 2 != 0) {
                $newArray[$count] = $array[$i];
                $count++;
            }
        }
    }
    return $newArray;
}

print_r(getSameParity([]));        // []
print_r(getSameParity([1, 2, 3])); // [1, 3]
print_r(getSameParity([1, 2, 8])); // [1]
print_r(getSameParity([2, 2, 8])); // [2, 2, 8]
