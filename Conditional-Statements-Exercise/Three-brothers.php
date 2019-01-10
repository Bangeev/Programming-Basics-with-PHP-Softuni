<?php

$a = floatval(readline());
$b = floatval(readline());
$c = floatval(readline());
$d = floatval(readline());

$obshtoVreme = 1 / (1/$a+1/$b+1/$c);
$vremeSpochivka = $obshtoVreme * 0.15;
$OVZPIZP = $obshtoVreme + $vremeSpochivka;
$ostavashtoVreme = $d - $OVZPIZP;


printf("Cleaning time: %.2f" . PHP_EOL, $OVZPIZP);
if ($ostavashtoVreme > 0) {
    printf("Yes, there is a surprise - time left -> %.0f hours.", floor($ostavashtoVreme));
} else {
    printf("No, there isn't a surprise - shortage of time -> %.0f hours.", abs(floor($ostavashtoVreme)));
}

