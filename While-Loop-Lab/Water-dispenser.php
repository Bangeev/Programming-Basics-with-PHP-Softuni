<?php

$cupVolume = intval(readline());
$counter = 0;
$overallVolume = 0;
$volume = 0;

$button = "";

while (($button = readline())!= NULL && $overallVolume < $cupVolume) {
    
    switch ($button) {
        case "Easy": $volume = 50;
            break;
        case "Medium": $volume = 100;
            break;
        case "Hard": $volume = 200;
            break;
    }
    $overallVolume = $overallVolume + $volume;
    $counter++;
    
    
}
if ($overallVolume > $cupVolume) {
    $splitWater = $overallVolume - $cupVolume;
    echo "{$splitWater}ml has been spilled.";
} else {
    echo "The dispenser has been tapped $counter times.";
}