<?php

$guests = intval(readline());
$moneyForParty = intval(readline());

$priceForCovert = $guests * 20;
//echo "$priceForCovert" . PHP_EOL;
$ostavashtiPari = $moneyForParty - $priceForCovert;
//echo "$ostavashtiPari" . PHP_EOL;
$pariZaFoiverki = $ostavashtiPari * 0.40;
//echo "$pariZaFoiverki" . PHP_EOL;
$pariZaDarenie = $ostavashtiPari - $pariZaFoiverki;
//echo "$pariZaDarenie" . PHP_EOL;


if ($moneyForParty >= $priceForCovert) {
    printf("Yes! %.0f lv are for fireworks and %.0f lv are for donation.", $pariZaFoiverki, $pariZaDarenie);
}else {
    printf("They won't have enough money to pay the covert. They will need %.0f lv more.", abs($ostavashtiPari));
}