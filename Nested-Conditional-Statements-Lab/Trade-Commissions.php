<?php

$sity = strtolower(readline());
$sales = strtolower(readline());

$comissions = -1;

if ($sity == "sofia") {
    if ($sales >= 0 && $sales <= 500) {
        $comissions = 0.05;
    } elseif ($sales > 500 && $sales <= 1000) {
        $comissions = 0.07;
    } elseif ($sales > 1000 && $sales <= 10000) {
        $comissions = 0.08;
    } elseif ($sales > 10000) {
        $comissions = 0.12;
    }
} elseif ($sity == "varna" ) {
    if ($sales >= 0 && $sales <= 500) {
        $comissions = 0.045;
    } elseif ($sales > 500 && $sales <= 1000) {
        $comissions = 0.075;
    } elseif ($sales > 1000 && $sales <= 10000) {
        $comissions = 0.10;
    } elseif ($sales > 10000) {
        $comissions = 0.13;
    }
} elseif ($sity == "plovdiv" ) {
    if ($sales >= 0 && $sales <= 500) {
        $comissions = 0.055;
    } elseif ($sales > 500 && $sales <= 1000) {
        $comissions = 0.08;
    } elseif ($sales > 1000 && $sales <= 10000) {
        $comissions = 0.12;
    } elseif ($sales > 10000) {
        $comissions = 0.145;
    }
}
if($comissions >= 0){
    printf("%.2f", $sales * $comissions);
} else {
    echo "error";
}