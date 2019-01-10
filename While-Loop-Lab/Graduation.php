<?php

$name = strval(readline());
$counter = 1;
$sum = 0;
$countertwo = 0;

while ($counter <= 12) {
    
    $grade = floatval(readline());
    if ($grade >= 4.00) {
        $sum += $grade;
               $counter++;


    }
    if ($grade < 4.00) {
        
               $countertwo++;
               if ($countertwo > 1){
                   break;
               }
    }
    
    
    
}
if ($counter == 13) {
        $sum = $sum / 12;
printf("$name graduated. Average grade: %.2f", $sum);
} else {
    printf("$name has been excluded at $counter grade");
}