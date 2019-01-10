<?php

$numGroups = intval(readline());
$peoples = 0;
$countGroupOne = 0;
$countGroupTwo = 0;
$countGroupThree = 0;
$countGroupFour = 0;
$countGroupFive = 0;

for ($i = 0; $i < $numGroups; $i++){
    $peopleInGroup = intval(readline());
    $peoples += $peopleInGroup;
    if ($peopleInGroup <= 5) {
        $countGroupOne += $peopleInGroup;
    }
    if ($peopleInGroup >=6 && $peopleInGroup <= 12) {
        $countGroupTwo += $peopleInGroup;
    }
    if ($peopleInGroup >= 13 && $peopleInGroup <= 25) {
        $countGroupThree += $peopleInGroup;
    }
    if ($peopleInGroup >= 26 && $peopleInGroup <= 40) {
        $countGroupFour += $peopleInGroup;
    }
    if ($peopleInGroup >= 41) {
        $countGroupFive += $peopleInGroup;
    }
}

$musala = $countGroupOne / $peoples * 100;
$monblan = $countGroupTwo / $peoples * 100;
$kilimanjaro = $countGroupThree / $peoples * 100;
$ktwo = $countGroupFour / $peoples * 100;
$everest = $countGroupFive / $peoples * 100;

echo number_format($musala, 2,'.','') . "%" . PHP_EOL;
echo number_format($monblan, 2,'.','') . "%"  . PHP_EOL;
echo number_format($kilimanjaro, 2,'.','') . "%"  . PHP_EOL;
echo number_format($ktwo, 2,'.','') . "%"  . PHP_EOL;
echo number_format($everest, 2,'.','') . "%"  . PHP_EOL;