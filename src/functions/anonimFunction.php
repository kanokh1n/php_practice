<?php

$last = function ($str) 
{
    if (empty($str)) return null;   
    else return substr($str, -1);
};

print_r($last(''));     // null
print_r($last('0'));    // 0
print_r($last('210'));  // 0
print_r($last('pow'));  // w
print_r($last('kids')); // s