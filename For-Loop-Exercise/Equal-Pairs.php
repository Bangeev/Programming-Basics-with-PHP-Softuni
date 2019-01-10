<?php

$n = intval(readline());
$sumNewPair = 0;
$sumOldPair = 0;
$maxDiff = 0;
$counter = 1;

for($i = 1;$i <= $n; $i++){
    $num1 = intval(readline());
    $num2 = intval(readline());
    $sumNewPair = $num1 + $num2;
    if ($sumNewPair == $sumOldPair) {
        $counter++;
    }
    if ($maxDiff < abs($sumNewPair - $sumOldPair) && $i >= 2) 
        $maxDiff = abs($sumNewPair - $sumOldPair);
    
    if ($sumNewPair != $sumOldPair) {
        $sumOldPair = $sumNewPair;
    }
}
if ($counter == $n) {
    echo "Yes, value=$sumNewPair";
} else {
    echo "No, maxdiff=$maxDiff";
}
