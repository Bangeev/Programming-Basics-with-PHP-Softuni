<?php

$flowers = strval(readline());
$numFlowers = intval(readline());
$budget = intval(readline());
$flowersPrice = 0;

switch ($flowers) {
    case "Roses": $flowersPrice = 5;
        break;
   case "Dahlias": $flowersPrice = 3.80;
        break;
    case "Tulips": $flowersPrice = 2.80;
        break;
    case "Narcissus": $flowersPrice = 3;
        break;
    case "Gladiolus": $flowersPrice = 2.50;
        break;
default:
     break;
}

$totalPrice = $flowersPrice * $numFlowers;

if ($numFlowers > 80 && $flowers == "Roses") {
    $totalPrice = $totalPrice - ($totalPrice * 0.10);
}elseif ($numFlowers > 90 && $flowers == "Dahlias") {
    $totalPrice = $totalPrice - ($totalPrice * 0.15);
}elseif ($numFlowers > 80 && $flowers == "Tulips") {
    $totalPrice = $totalPrice - ($totalPrice * 0.15);
}elseif ($numFlowers < 120 && $flowers == "Narcissus") {
    $totalPrice = $totalPrice + ($totalPrice * 0.15);
}elseif ($numFlowers < 80 && $flowers == "Gladiolus") {
    $totalPrice = $totalPrice + ($totalPrice * 0.20);
}


if ($budget < $totalPrice) {
    printf("Not enough money, you need %.2f leva more.", abs($budget - $totalPrice));
} else {
    printf("Hey, you have a great garden with %.0f %s and %.2f leva left.", $numFlowers , $flowers, abs($budget - $totalPrice));
}