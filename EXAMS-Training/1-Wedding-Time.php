<?php

$whiskyPrice = floatval(readline());
$waterL = floatval(readline());
$wineL = floatval(readline());
$champageL = floatval(readline());
$whiskyL = floatval(readline());


$champagePriceL = $whiskyPrice * 0.5;
$winePriceL = $champagePriceL * 0.4;
$waterPriceL = $champagePriceL * 0.1;

$sumForChampage = $champagePriceL * $champageL;
$sumForWine = $wineL * $winePriceL;
$sumForWater = $waterL * $waterPriceL;
$sumForWhisky = $whiskyL * $whiskyPrice;

$sumForAll = $sumForChampage + $sumForWater + $sumForWhisky + $sumForWine;
printf("%.2f", $sumForAll);
