<?php

use App\Point;
function getMidpoint(Point $point1, Point $point2)
{
    $midpointX = ($point1->x + $point2->x) / 2;
    $midpointY = ($point1->y + $point2->y) / 2;

    return new Point($midpointX, $midpointY);
}

$point1 = new Point(1, 2);
$point2 = new Point(5, 8);

$midpoint = getMidpoint($point1, $point2);
print_r($midpoint);