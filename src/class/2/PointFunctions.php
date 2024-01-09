<?php

namespace PointFunctions;

use App\Point;

function dup(Point $point) {

    $newPoint = new Point($point->x, $point->y);
    return $newPoint;

}