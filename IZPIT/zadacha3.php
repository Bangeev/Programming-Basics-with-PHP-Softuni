<?php

$sladkish = strtolower(readline());
$numSladkish = intval(readline());
$day = intval(readline());

if ($day <= 15) {
    if ($sladkish == "cake") {
       $cena = $numSladkish * 24;
       
       
    }elseif ($sladkish == "souffle") {
        $cena = $numSladkish * 6.66;
    }elseif ($sladkish == "baklava") {
        $cena = $numSladkish * 12.60;
    }
    $sledotstpka = $cena * 0.10;
       $cena -= $sledotstpka;
}
if ($day > 15 && $day <= 22) {
    if ($sladkish == "cake") {
       $cena = $numSladkish * 28.70;
    }elseif ($sladkish == "souffle") {
        $cena = $numSladkish * 9.80;
    }elseif ($sladkish == "baklava") {
        $cena = $numSladkish * 16.98;
    }
}
if ($day > 22) {
    if ($sladkish == "cake") {
       $cena = $numSladkish * 28.70;
    }elseif ($sladkish == "souffle") {
        $cena = $numSladkish * 9.80;
    }elseif ($sladkish == "baklava") {
        $cena = $numSladkish * 16.98;
    }
    printf("%.2f",$cena);
}


if ($cena > 100 && $cena < 200 && $day <= 22) {
    $otsupka15 = $cena * 0.15;
    $sledOts = $cena - $otsupka15;
    printf("%.2f",$sledOts);
        
   
} elseif ($cena >= 200 && $day <= 22) {
     $otsupka15 = $cena * 0.25;
    $sledOts = $cena - $otsupka15;
    printf("%.2f",$sledOts);
    
}