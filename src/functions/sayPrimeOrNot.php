<?php

function sayPrimeOrNot($number)
{
    if (primeCheck($number) == 1)
    print_r("Yes");
    else
    print_r("No");
}

function primeCheck($number){
    if ($number == 1)
    return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}

print_r(sayPrimeOrNot(5)); // yes
print_r(sayPrimeOrNot(4)); // no