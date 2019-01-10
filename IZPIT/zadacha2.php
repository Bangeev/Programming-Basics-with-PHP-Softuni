<?php

$money = floatval(readline());
$fentuzi = intval(readline());
$horor = intval(readline());
$romantic = intval(readline());

$sumProdajbi = $fentuzi * 14.90 + $horor * 9.80 + $romantic * 4.30;
$bezdds = $sumProdajbi * 0.80;
   $izvajdane = $bezdds - $money;  
    $procenZaSlujtel = floor($izvajdane * 0.10) ;
    $kumsumazadar = $izvajdane - $procenZaSlujtel + $money;

if ($bezdds >= $money) {
   printf("%.2f leva donated." . PHP_EOL,$kumsumazadar);
    echo "Sellers will receive $procenZaSlujtel leva.";
    } else {
    $Sum = $money - $bezdds;
    printf("%.2f money needed.", $Sum);
}