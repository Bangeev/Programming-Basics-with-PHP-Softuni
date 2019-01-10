<?php

$budget = floatval(readline());
$cat = strtolower(readline());
$people = intval(readline());
$biletNormal = 249.99;
$biletVip = 499.99;
$transport = 0;



if ($people >= 1 && $people <= 4) {
    $transport = $budget * 0.75;
} elseif ($people > 4 && $people <= 9) {
     $transport = $budget * 0.60;
}elseif ($people > 9 && $people <= 24) {
     $transport = $budget * 0.50;
}elseif ($people > 24 && $people <= 49) {
     $transport = $budget * 0.40;
}elseif ($people > 49) {
     $transport = $budget * 0.25;
}

$transport = $budget - $transport;
$biletNormal = $biletNormal * $people;
$biletVip = $biletVip * $people;
if ($biletNormal <= $transport && $cat == "normal") {
    printf("Yes! You have %.2f leva left.", abs($transport - $biletNormal) );
} elseif ($biletVip <= $transport && $cat == "vip") {
    printf("Yes! You have %.2f leva left.", abs($transport - $biletVip) );
} elseif ($biletNormal > $transport && $cat == "normal") {
    printf("Not enough money! You need %.2f leva.", abs($transport - $biletNormal));
} elseif ($biletVip > $transport && $cat == "vip") {
    printf("Not enough money! You need %.2f leva.", abs($transport - $biletVip));
}
