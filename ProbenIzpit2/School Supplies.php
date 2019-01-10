<?php

$himikali = intval(readline());
$markeri = intval(readline());
$preparatLitur = floatval(readline());
$namalenie = intval(readline());
$obshto = 0;
$sNamalenie = 0;
$himikali *= 5.80;
$markeri *= 7.20;
$preparatLitur *= 1.20;
$obshto = $himikali + $markeri + $preparatLitur;
$sNamalenie = $obshto - (($obshto * $namalenie) / 100);

printf("%.3f",$sNamalenie);


