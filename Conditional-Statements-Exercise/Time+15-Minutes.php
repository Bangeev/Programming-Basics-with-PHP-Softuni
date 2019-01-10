<?php

$hour = intval(readline());
$min = intval(readline());

$min = $min + 15;

if ($min >= 60) {
    $min = $min - 60;
    $hour = $hour + 1;
}
if ($hour > 23){
    $hour = $hour - 24;
}
if ($min < 10) {
    printf("%.0f:0%.0f", $hour , $min);
}
if ($min >= 10) {
    printf("%.0f:%.0f", $hour , $min);
}





