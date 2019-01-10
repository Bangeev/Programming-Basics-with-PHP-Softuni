<?php
$amouthToReturn = floatval(readline());
$coints = $amouthToReturn * 100;
$cointsCount = 0;



    while ($coints >= 200){
        $coints -= 200;
        $cointsCount++;
    }
    while ($coints >= 100){
        $coints -= 100;
        $cointsCount++;
    }
    while ($coints >= 50){
        $coints -= 50;
        $cointsCount++;
    }
    while ($coints >= 20) {
        $coints -= 20;
        $cointsCount++;
    }
    while ($coints >= 10) {
        $coints -= 10;
        $cointsCount++;
    }
    while ($coints >= 5){
        $coints -= 5;
        $cointsCount++;
    }
    while ($coints >= 2) {
        $coints -=2;
        $cointsCount++;
    }
    while ($coints >= 1) {
        $coints -= 1;
        $cointsCount++;
    }
   


echo "$cointsCount";







 
