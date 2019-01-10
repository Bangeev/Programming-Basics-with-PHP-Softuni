<?php

$food = intval(readline()) * 1000;
$foodInGram = 0 ;

while (true) {
    $command = readline();
    if ($command == "Adopted") {
        break;
    } else {
       $foodInGram += $command; 
       
    }
}
if ($foodInGram <= $food) {
    printf("Food is enough! Leftovers: %d grams.", abs($foodInGram - $food));
} else {
    printf("Food is not enough. You need %d grams more.", abs($foodInGram - $food));
}