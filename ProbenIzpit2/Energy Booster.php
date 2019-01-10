<?php

$plod = strtolower(readline());
$setRazmer = strtolower(readline());
$numSet = intval(readline());
$bigSet = 0;


if ($plod == "watermelon") {
    if ($setRazmer == "small") {
        $bigSet = 112 * $numSet;
    }elseif ($setRazmer == "big") {
        $bigSet = 143.50 * $numSet;
    }
}elseif ($plod == "mango") {
    if ($setRazmer == "small") {
        $bigSet = 73.32 * $numSet;
    }elseif ($setRazmer == "big") {
        $bigSet = 98 * $numSet;
    }
}elseif ($plod == "pineapple") {
    if ($setRazmer == "small") {
        $bigSet = 84.2 * $numSet;
    }elseif ($setRazmer == "big") {
        $bigSet = 124 * $numSet;
    }
}elseif ($plod == "raspberry") {
    if ($setRazmer == "small") {
        $bigSet = 40 * $numSet;
    }elseif ($setRazmer == "big") {
        $bigSet = 76 * $numSet;
    }
}

if ($bigSet >= 400 && $bigSet <= 1000) {
    $num = $bigSet;
    $num *= 0.15;
    $bigSet -= $num;
    printf("%.2f lv.",$bigSet);
}elseif($bigSet > 1000){
    $num = $bigSet;
    $num *= 0.50;
    $bigSet -= $num;
    printf("%.2f lv.",$bigSet);
} else {
    printf("%.2f lv.",$bigSet);
}
    