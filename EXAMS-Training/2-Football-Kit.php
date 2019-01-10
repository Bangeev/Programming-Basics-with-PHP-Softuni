<?php

$CenaNaTeniska = floatval(readline());
$priceToWinBall = floatval(readline());


$cenanaShorti = $CenaNaTeniska * 0.75;
$cenanaChorapi = $cenanaShorti * 0.2;
$cenanaBtuonki = ($CenaNaTeniska + $cenanaShorti) * 2;
$obshtaSuma = $cenanaShorti + $CenaNaTeniska + $cenanaChorapi + $cenanaBtuonki;
$sumaSledOtstupka = $obshtaSuma * 0.85;
$value = $priceToWinBall - $sumaSledOtstupka;
if ($sumaSledOtstupka > $priceToWinBall) {
    printf("Yes, he will earn the world-cup replica ball!\nHis sum is %.2f lv.", $sumaSledOtstupka);
    
} else {
    printf("No, he will not earn the world-cup replica ball.\nHe needs %.2f lv. more.", $value);
}
    