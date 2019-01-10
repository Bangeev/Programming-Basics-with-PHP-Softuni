<?php

$productName = strtolower(readline());
$town = strtolower(readline());
$quantity = floatval(readline());

$result = 0;

if ($town == "sofia") {
    if ($productName == "coffee") {
        $result = $quantity * 0.50;
    } elseif ($productName == "water") {
        $result = $quantity * 0.80;
    } elseif ($productName == "beer") {
        $result = $quantity * 1.20;
    } elseif ($productName == "sweets") {
        $result = $quantity * 1.45;
    } elseif ($productName == "peanuts") {
     $result = $quantity * 1.60;   
    }

}elseif ($town == "plovdiv") {
    if ($productName == "coffee") {
        $result = $quantity * 0.40;
    } elseif ($productName == "water") {
        $result = $quantity * 0.70;
    } elseif ($productName == "beer") {
        $result = $quantity * 1.15;
    } elseif ($productName == "sweets") {
        $result = $quantity * 1.30;
    } elseif ($productName == "peanuts") {
     $result = $quantity * 1.50;   
    }
}elseif ($town == "varna") {
    if ($productName == "coffee") {
        $result = $quantity * 0.45;
    } elseif ($productName == "water") {
        $result = $quantity * 0.70;
    } elseif ($productName == "beer") {
        $result = $quantity * 1.10;
    } elseif ($productName == "sweets") {
        $result = $quantity * 1.35;
    } elseif ($productName == "peanuts") {
     $result = $quantity * 1.55;   
    }
}

echo $result;