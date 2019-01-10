<?php

$pieces = intval(readline());
$moneyForOnePoint = floatval(readline());
$pointsForEtap = 0;
$points = 0;

for($i = 1; $i <= $pieces; $i++){
    $pointsForEtap = intval(readline());
    if ($i % 2 == 0) {
        $points += $pointsForEtap * 2;
    } else {
        $points += $pointsForEtap;
    }
}
$sum = $points * $moneyForOnePoint;
printf("The project prize was %.2f lv.",$sum);