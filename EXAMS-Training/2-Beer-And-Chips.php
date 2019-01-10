<?php

$fenName = strval(readline());
$money = floatval(readline());
$bottlesBira = intval(readline());
$broiChipsove = intval(readline());

$cenaNaBira = 1.20 * $bottlesBira;

$cenaNaChips = $cenaNaBira * 0.45;

$obshtaCenaZaVsChipsove = $cenaNaChips * $broiChipsove;
$obshtaCenaZaVsChipsove = ceil($obshtaCenaZaVsChipsove);
$obshataSumaZaDvete = $cenaNaBira + $obshtaCenaZaVsChipsove;

if ($obshataSumaZaDvete <= $money) {
    printf("%s bought a snack and has %.2f leva left.", $fenName, abs($obshataSumaZaDvete - $money));
} else {
    printf("%s needs %.2f more leva!", $fenName , abs($obshataSumaZaDvete - $money));
}

