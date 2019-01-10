<?php

$money = readline();
$inputCurrency = strval(readline());
$outputCurrency = strval(readline());

$bgn = 1;
$usd = 1.79549;
$eur = 1.95583;
$gbp = 2.53405;
if ($inputCurrency === "BGN" ) {
    if ($outputCurrency === "USD"){
        $outputMoney = $money / $usd;
        printf("%.2f", $outputMoney);
    } elseif ($outputCurrency === "EUR"){
        $outputMoney = $money / $eur;
        printf("%.2f", $outputMoney);
    }elseif ($outputCurrency === "GBP"){
        $outputMoney = $money / $gbp;
        printf("%.2f", $outputMoney);     
    }   
}
if ($inputCurrency === "USD" ) {
    if ($outputCurrency === "BGN"){
        $outputMoney = $money * $usd;
        printf("%.2f", $outputMoney);
    } elseif ($outputCurrency === "EUR"){
        $outputMoney = $money / ($eur / $usd);
        printf("%.2f", $outputMoney);
    }elseif ($outputCurrency === "GBP"){
        $outputMoney = $money / ($gbp / $usd);
        printf("%.2f", $outputMoney);     
    }   
}
if ($inputCurrency === "EUR" ) {
    if ($outputCurrency === "USD"){
        $outputMoney = $money / $usd;
        printf("%.2f", $outputMoney);
    } elseif ($outputCurrency === "BGN"){
        $outputMoney = $money * $eur;
        printf("%.2f", $outputMoney);
    }elseif ($outputCurrency === "GBP"){
        $outputMoney = $money / ($gbp / $eur);
        printf("%.2f", $outputMoney);     
    }   
}
if ($inputCurrency === "GBP" ) {
    if ($outputCurrency === "USD"){
        $outputMoney = $money / ($usd / $gbp);
        printf("%.2f", $outputMoney);
    } elseif ($outputCurrency === "EUR"){
        $outputMoney = $money / $eur;
        printf("%.2f", $outputMoney);
    }elseif ($outputCurrency === "BGN"){
        $outputMoney = $money * $gbp;
        printf("%.2f", $outputMoney);     
    }   
}