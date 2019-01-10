<?php

$cenaNaParty = floatval(readline());
$broiLubovniPoslaniq = intval(readline());
$broiVosuchniRozi = intval(readline());
$broiKluchodurjateli = intval(readline());
$broiKarikaturi = intval(readline());
$broiKusmetIznenada = intval(readline());

$suma = $broiLubovniPoslaniq *0.60 + $broiVosuchniRozi * 7.2 + $broiKluchodurjateli * 3.60 + $broiKarikaturi * 18.20 + $broiKusmetIznenada * 22;
//echo $suma . PHP_EOL;
$broiartikuli = $broiKarikaturi + $broiKluchodurjateli + $broiKusmetIznenada + $broiLubovniPoslaniq + $broiVosuchniRozi;
//echo $broiartikuli . PHP_EOL;
if ($broiartikuli > 25) {
        $sumasOtsupka = $suma * 0.35;
        //echo $sumasOtsupka . PHP_EOL;
}
$krainaCena = $suma - $sumasOtsupka;
//echo $krainaCena . PHP_EOL;

$razhodZaHosting = $krainaCena * 0.10;
//echo $razhodZaHosting . PHP_EOL;

$pechalba = $krainaCena - $razhodZaHosting;
//echo $pechalba . PHP_EOL;


if ($pechalba > $cenaNaParty) {
    printf("Yes! %.2f lv left.",$pechalba - $cenaNaParty);
}else {
    printf("Not enough money! %.2f lv needed.", abs($pechalba - $cenaNaParty));
}


        
        
        