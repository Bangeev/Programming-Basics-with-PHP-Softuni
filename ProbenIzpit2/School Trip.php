<?php

$otsustviqAni = intval(readline());
$hranaVkilogrami = intval(readline());
$kucheedno = floatval(readline());
$kuchedve = floatval(readline());
$kuchetri  = floatval(readline());


$kucheedno *= $otsustviqAni;
$kuchedve *= $otsustviqAni;
$kuchetri *= $otsustviqAni;

$obshto = $kuchedve + $kucheedno + $kuchetri;

if ($obshto <= $hranaVkilogrami) {
    printf("%d kilos of food left.", floor($hranaVkilogrami - $obshto));
    
} else {
    printf("%d more kilos of food are needed.", ceil($obshto - $hranaVkilogrami));
}
