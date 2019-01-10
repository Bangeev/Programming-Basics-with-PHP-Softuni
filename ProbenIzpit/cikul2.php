<?php

$putnici = intval(readline());
$spirki = intval(readline());


for($i = 1 ; $i <= $spirki;$i++){
        $SlizatPutnici = intval(readline());
        $putniciKachvat = intval(readline());
        $putnici -= $SlizatPutnici;
        $putnici += $putniciKachvat;

    if ($i % 2 == 0) {
        $putnici - 2;
    } else {
        $putnici + 2;
    }
}
echo "The final number of passengers is : $putnici";