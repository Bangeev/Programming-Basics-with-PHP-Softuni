<?php

$distanceInKilometri = floatval(readline());
$razhodNaBenzinZa100km = floatval(readline());
$cenaNaBenzinZaLitur = floatval(readline());
$pariKoitoSaSpecheleni = floatval(readline());


$razhodNaKola = $distanceInKilometri * $razhodNaBenzinZa100km / 100;
//echo $razhodNaKola . PHP_EOL;

$obshtRazhod = $razhodNaKola * $cenaNaBenzinZaLitur;
//echo $obshtRazhod . PHP_EOL;

$purviSluchai = $pariKoitoSaSpecheleni - $obshtRazhod;
//echo $purviSluchai . PHP_EOL;

$vtoriSluchai = $pariKoitoSaSpecheleni / 5;
//echo $vtoriSluchai . PHP_EOL;


if ($obshtRazhod <= $pariKoitoSaSpecheleni) {
    printf("You can go home. %.2f money left.", $purviSluchai);
}else {
    printf("Sorry, you cannot go home. Each will receive %.2f money.", $vtoriSluchai);
}