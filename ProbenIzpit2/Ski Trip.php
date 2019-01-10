<?php

$days = intval(readline());
$room = strtolower(readline());
$score = strtolower(readline());
$roomPrice = 0 ;
$scorePrice = 0;

if ($room == "room for one person") {
    if ($days != 0) {
        $days--;
        $roomPrice = $days * 18.00;
    }
    
} elseif ($room == "apartment") {
    if ($days < 10) {
        $days--;
         $roomPrice = $days * 25.00;
        $otstupka = $roomPrice * 0.30;
        $roomPrice -= $otstupka;
    }elseif ($days >= 10 && $days <= 15) {
       $days--;
        $roomPrice = $days * 25.00;
        $otstupka = $roomPrice * 0.35;
        $roomPrice -= $otstupka;
    }elseif ($days > 15) {
       $days--;
        $roomPrice = $days * 25.00;
        $otstupka = $roomPrice * 0.50;
        $roomPrice -= $otstupka;
    }
    
}elseif ($room == "president apartment") {
    if ($days < 10) {
        $days--;
         $roomPrice = $days * 35.00;
        $otstupka = $roomPrice * 0.10;
        $roomPrice -= $otstupka;
    }elseif ($days >= 10 && $days <= 15) {
       $days--;
        $roomPrice = $days * 35.00;
        $otstupka = $roomPrice * 0.15;
        $roomPrice -= $otstupka;
    }elseif ($days > 15) {
       $days--;
        $roomPrice = $days * 35.00;
        $otstupka = $roomPrice * 0.20;
        $roomPrice -= $otstupka;
    }
}
if ($score == "positive") {
    $scorePrice = $roomPrice * 0.25;
    $roomPrice += $scorePrice;
    printf("%.2f",$roomPrice);
}elseif ($score == "negative") {
    $scorePrice = $roomPrice * 0.10;
    $roomPrice -= $scorePrice;
    printf("%.2f",$roomPrice);
}