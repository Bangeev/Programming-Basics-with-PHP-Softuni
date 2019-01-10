<?php

$recorinSec = floatval(readline());
$raztoqnievmetri = floatval(readline());
$vremevSecZaIzkac = floatval(readline());


$vremeZaIzkac = $raztoqnievmetri * $vremevSecZaIzkac;
$secToAdd = floor( $raztoqnievmetri / 50);
$secToAdd *= 30;
$obshtovreme = $vremeZaIzkac + $secToAdd;


if ($recorinSec <= $obshtovreme) {
    printf("No! He was %.2f seconds slower.",abs($recorinSec - $obshtovreme));
    
} else {
    printf("Yes! The new record is %.2f seconds.", $obshtovreme);
}