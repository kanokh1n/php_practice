<?php

function buildDefinitionList($array)
{
    $string = '';
    if($array) {
        foreach ($array as $row) {
            $string = $string . "<dt>" . $row[0] . "</dt>" . "<dd>" . $row[1] . "</dd>";
        }
        return "<dl>" . $string . "</dl>";
    }
    else return $array;
}

$definitions = [
    ['Блямба', 'Выпуклость, утолщения на поверхности чего-либо'],
    ['Бобр', 'Животное из отряда грызунов'],
];

print_r(buildDefinitionList($definitions));