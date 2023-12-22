<?php

function countUniqChars($string)
{
    $array = [];

    for($i = 0; $i < strlen($string); $i++)
    {
        if(in_array($string[$i],$array)) $array[$string[$i]]++;
        else $array[$string[$i]] = 1;
    }

    return count($array);
}

$text1 = 'yyab';
print_r(countUniqChars($text1)); // 3

$text2 = 'You know nothing Jon Snow';
print_r(countUniqChars($text2)); // 13

$text3 = '';
print_r(countUniqChars($text3)); // 0