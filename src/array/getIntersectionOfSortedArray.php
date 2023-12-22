<?php

function getIntersectionOfSortedArray($firstArray, $secondArray)
{
    $array=[];
    for($i = 0; $i < count($firstArray); $i++)
    {
        for($j = 0; $j < count($secondArray); $j++)
        {
            if($firstArray[$i] == $secondArray[$j]) $array[$i] = $firstArray[$i];
        }
    }
    return $array;
}

print_r(getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30])); // [10, 24]

print_r(getIntersectionOfSortedArray([10, 11, 24], [-2, 3, 4])); // []

print_r(getIntersectionOfSortedArray([], [2])); // []