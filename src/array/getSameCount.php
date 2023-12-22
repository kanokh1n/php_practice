<?php

function getSameCount($firstArray, $secondArray)
{
    $newArray = array_merge($firstArray, $secondArray);
    $newArray = array_unique($newArray);

    $count = 0;
    foreach ($newArray as $value)
    {
        if(in_array($value, $firstArray) && in_array($value, $secondArray)) $count++;
    }

    return $count . " ";

}

print_r(getSameCount([], [])); // 0
print_r(getSameCount([4, 4], [4, 4])); // 1
print_r(getSameCount([1, 10, 3], [10, 100, 35, 1])); // 2
print_r(getSameCount([1, 3, 2, 2], [3, 1, 1, 2])); // 3