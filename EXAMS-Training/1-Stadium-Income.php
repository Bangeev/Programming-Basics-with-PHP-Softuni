<?php

$numberOfSectors = intval(readline());
$stadimCapacity = intval(readline());
$ticketPrice = floatval(readline());



$moneyFromOneSector = $stadimCapacity * $ticketPrice / $numberOfSectors;
$commonMoney = $moneyFromOneSector * $numberOfSectors;
$cherityMoney = ($commonMoney - ($moneyFromOneSector * 0.75))/ 8;
printf("Total income - %.2f BGN" . PHP_EOL, $commonMoney);
printf("Money for charity - %.2f BGN", $cherityMoney);