<?php

$alpinisti = intval(readline());
$karabineri = intval(readline());
$vujeta = intval(readline());
$pikelite = intval(readline());



$karabineri *= 36;
$vujeta *= 3.60;
$pikelite *= 19.80;

$obshto = $karabineri + $vujeta + $pikelite;

$sumaZaVsicki = $obshto * $alpinisti;
$sumaSDDS = $sumaZaVsicki + (0.20 * $sumaZaVsicki);



printf("%.2f", $sumaSDDS);