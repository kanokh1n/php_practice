<?php

use function App\PointFunctions\dup;

$originalPoint = new App\Point(3, 7);
$clonedPoint = dup($originalPoint);

print_r($clonedPoint);