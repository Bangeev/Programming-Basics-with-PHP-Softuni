<?php

$x1 = floatval(readline());
$y1 = floatval(readline());
$x2 = floatval(readline());
$y2 = floatval(readline());

$a = abs($x1 - $x2);
$b = abs($y1 - $y2);

$area = $a * $b;
$perimeter = 2 * ($a + $b);
echo $area . PHP_EOL;
echo $perimeter;
