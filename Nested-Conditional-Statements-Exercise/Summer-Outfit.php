<?php

$degres = intval(readline());
$dayTime = strtolower(readline());
$outFit = "";
$shoes = "";

if ($dayTime == "morning") {
    if (10 <= $degres && $degres <= 18) {
        $outFit = "Sweatshirt";
        $shoes = "Sneakers";
    }elseif (18 < $degres && $degres <= 24) {
        $outFit = "Shirt";
        $shoes = "Moccasins";
    }elseif (25 <= $degres) {
        $outFit = "T-Shirt";
        $shoes = "Sandals";
    }
}elseif ($dayTime == "afternoon") {
    if (10 <= $degres && $degres <= 18) {
        $outFit = "Shirt";
        $shoes = "Moccasins";
    }elseif (18 < $degres && $degres <= 24) {
        $outFit = "T-Shirt";
        $shoes = "Sandals";
    }elseif (25 <= $degres) {
        $outFit = "Swim Suit";
        $shoes = "Barefoot";
    }
}elseif ($dayTime == "evening") {
    if (10 <= $degres && $degres <= 18) {
        $outFit = "Shirt";
        $shoes = "Moccasins";
    }elseif (18 < $degres && $degres <= 24) {
        $outFit = "Shirt";
        $shoes = "Moccasins";
    }elseif (25 <= $degres) {
        $outFit = "Shirt";
        $shoes = "Moccasins";
    }
}

if ($dayTime == "morning") {
    printf("It's %.0f degrees, get your %s and %s.", $degres, $outFit, $shoes);    
}elseif ($dayTime == "afternoon") {
    printf("It's %.0f degrees, get your %s and %s.", $degres, $outFit, $shoes);    
}elseif ($dayTime == "evening") {
    printf("It's %.0f degrees, get your %s and %s.", $degres, $outFit, $shoes);    
}