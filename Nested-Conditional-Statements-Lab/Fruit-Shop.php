<?php

$fruit = strtolower(readline());
$day = strtolower(readline());
$quantity = floatval(readline());

$price = -1.0;

if ($day == "monday" || $day == "tuesday" || $day == "wednesday" || $day == "thursday" || $day == "friday") {
    if ($fruit == "banana") {
        $price = $quantity * 2.50;
    } elseif ($fruit == "apple") {
        $price = $quantity * 1.20;
    } elseif ($fruit == "orange") {
        $price = $quantity * 0.85;
    }elseif ($fruit == "grapefruit") {
        $price = $quantity * 1.45;
    } elseif ($fruit == "kiwi") {
        $price = $quantity * 2.70;
    } elseif ($fruit == "pineapple") {
        $price = $quantity * 5.50;
    } elseif ($fruit == "grapes") {
        $price = $quantity * 3.85;
    }
    
} elseif ($day == "saturday" || $day == "sunday") {
    if ($fruit == "banana") {
        $price = $quantity * 2.70;
    } elseif ($fruit == "apple") {
        $price = $quantity * 1.25;
    } elseif ($fruit == "orange") {
        $price = $quantity * 0.90;
    }elseif ($fruit == "grapefruit") {
        $price = $quantity * 1.60;
    } elseif ($fruit == "kiwi") {
        $price = $quantity * 3.00;
    } elseif ($fruit == "pineapple") {
        $price = $quantity * 5.60;
    } elseif ($fruit == "grapes") {
        $price = $quantity * 4.20;
    }
}

if ($price >= 0 ) {
    printf("%.2f", $price);
}else {
    echo "error";
}