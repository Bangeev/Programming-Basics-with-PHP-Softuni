<?php

$x1 = floatval(readline());
$y1 = floatval(readline());
$x2 = floatval(readline());
$y2 = floatval(readline());
$x = floatval(readline());
$y = floatval(readline());


$onLeftSide = ($x == $x1) && ($y >= $y1) && ($y <= $y2);
$onRightSide = ($x == $x2) && ($y >= $y1) && ($y <= $y2);
$onUpSide = ($y == $y1) && ($x >= $x1) && ($x <= $x2);
$onDownSide = ($y == $y2) && ($x >= $x1) && ($x <= $x2);

if ($onDownSide || $onLeftSide || $onRightSide || $onUpSide) {
    echo "Border";
} else {
    echo "Inside / Outside";
}

// Dmalko da pomislime tuka posle !!!