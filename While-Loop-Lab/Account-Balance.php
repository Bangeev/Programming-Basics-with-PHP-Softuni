<?php

$n = intval(readline());
$counter = 0;
$balance = 0.00;
while ($counter < $n) {
    $amouth = floatval(readline());
    if ($amouth < 0) {
        echo "Invalid operation!" . PHP_EOL;
        break;
    }
    $balance += $amouth; 
    printf("Increase: %.2f" . PHP_EOL, $amouth);
    $counter++;
}
printf("Total: %.2f", $balance);