<?php

$baklava = floatval(readline());
$mufini = floatval(readline());
$shtolen = floatval(readline());
$bonboni = floatval(readline());
$biskviti = floatval(readline());


$cenashtolen = $baklava + $baklava * 0.60;
$sumshtolen = $shtolen * $cenashtolen;
$cenaBonbon = $mufini + $mufini * 0.80;
$sumbonbon = $bonboni * $cenaBonbon;
$sumBiskvit = $biskviti * 7.50;
$smetka = $sumshtolen + $sumbonbon + $sumBiskvit;

printf("%.2f",$smetka);
