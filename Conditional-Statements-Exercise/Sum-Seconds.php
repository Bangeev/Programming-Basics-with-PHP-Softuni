<?php

$num1 = intval(readline());
$num2 = intval(readline());
$num3 = intval(readline());


$sum = $num1 + $num2 + $num3;

$sumMinute = $sum / 60;
$sumSeconds = $sum % 60;

if ($sumSeconds < 10){
    printf("%.0f:0%.0f", floor($sumMinute), floor($sumSeconds));
} elseif ($sumMinute < 59){
     printf("%.0f:%.0f", floor($sumMinute), floor($sumSeconds));
}else{
    printf("%.0f:%.0f", $sumMinute, $sumSeconds);
}