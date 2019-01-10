<?php

$x1 = floatval(readline());
$y1 = floatval(readline());

$x2 = floatval(readline());
$y2 = floatval(readline());

$x = floatval(readline());
$y = floatval(readline());

if ($x >= $x1 && $x <= $x2 && $y >= $y1 && $y <= $y2) {
    echo "Inside";
}else {
    echo "Outside";
}