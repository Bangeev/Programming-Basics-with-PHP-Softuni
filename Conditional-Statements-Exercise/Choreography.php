<?php
$broiStupki = intval(readline());
$broiTanciori = intval(readline());
$broiDniZaUchene = intval(readline());

$stupkiNaDen = ceil(($broiStupki / $broiDniZaUchene) / $broiStupki * 100);
$pszvt = $stupkiNaDen / $broiTanciori;
$pszvt = number_format($pszvt, 2, '.', '');

if ($stupkiNaDen <= 13){
    echo "Yes, they will succeed in that goal! $pszvt%.";
} else{
    echo "No, they will not succeed in that goal! Required $pszvt% steps to be learned per day.";
}