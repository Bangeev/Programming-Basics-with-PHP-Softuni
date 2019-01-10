<?php

$sumaZaGost = intval(readline());
$grupa = 0;
$CountHora = 0;
$ostanalipari = 0;

while (true) {
    $broiNaHora = intval(readline());
    $CountHora += $broiNaHora;
    
    if ($broiNaHora == strval("The restaurant is full") ) {
        break;
    }
    
    if ($broiNaHora < 5) {
        $grupa += $broiNaHora * 100;
    }
    if ($broiNaHora >=5) {
        $grupa += $broiNaHora * 70;
        
    }
    
}


if ($grupa >= $sumaZaGost) {
    
    printf("You have $CountHora guests and %d leva left.", abs($sumaZaGost - $grupa));
} else {
    echo "You have $CountHora guests and $grupa leva income, but no singer.";
}