<?php

function checkIfBalanced($string)
{
    $stack = [];

    for($i = 0; $i < strlen($string); $i++)
    {
        if($string[$i] === '(') {
            $stack[] = '(';
        } else if($string[$i] === ')') {
            if(empty($stack)) {
                return false;
            } else {
                array_shift($stack);
            }
        }
    }

    return empty($stack);
}

print_r(checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)')); // true
print_r(checkIfBalanced('(4 + 3))')); // false
