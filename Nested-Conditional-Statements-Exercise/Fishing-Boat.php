<?php

$budget = floatval(readline());
$sesson = strval(readline());
$numPeople = intval(readline());
$seasonPara = 0;

switch ($sesson) {
    case "Spring": $seasonPara = 3000;
       
        break;
    case "Summer": $seasonPara = 4200;
        
        break;
    case "Autumn": $seasonPara = 4200;
        break;
    case "Winter": $seasonPara = 2600;
      
        break;
    default:
        break;
}
if ($numPeople % 2 == 0 && $sesson != "Autumn") {
            $seasonPara = $seasonPara - ($seasonPara * 0.05);
        }

if ($numPeople <= 6) {
    $seasonPara = $seasonPara - ($seasonPara * 0.10);
}elseif ($numPeople > 7 && $numPeople <= 11) {
    $seasonPara = $seasonPara - ($seasonPara * 0.15);
}else{
    $seasonPara = $seasonPara - ($seasonPara * 0.25);
}

if ($budget < $seasonPara) {
    printf("Not enough money! You need %.2f leva.",$seasonPara - $budget);
} else {
    printf("Yes! You have %.2f leva left.",$budget - $seasonPara);
}