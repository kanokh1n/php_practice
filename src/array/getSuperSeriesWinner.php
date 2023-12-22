<?php
function getSuperSeriesWinner($array)
{
    $canada = 0;
    $ussr = 0;
    $winner = 'ussr';
    for($i = 0; $i < count($array); $i++)
    {
        if($array[$i][0] > $array[$i][1]) $canada++;
        else if ($array[$i][0] < $array[$i][1]) $ussr++;
    }
    if($canada > $ussr) $winner = 'canada';
    return $winner;
}
$scores = [
    [3, 7], // Первая игра
    [4, 1], // Вторая игра
    [4, 4],
    [3, 5],
    [4, 5],
    [3, 2],
    [4, 3],
    [6, 5],
];

print_r(getSuperSeriesWinner($scores));