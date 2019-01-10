<?php

$ab = intval(readline());
$ba = intval(readline());
$nmax = intval(readline());

$count = 0;
$A = 35;
$B = 64;
for($i = 1; $i <= $ab; $i++){
    for($k = 1; $k <= $ba; $k++){

     $count++;
    if ($nmax < $count) {
        break;
    }
    echo "" . chr($A) . chr($B);
    echo $i;
    echo $k;
    echo "" . chr($B) . chr($A) . "|";
    $A++;
    $B++;
    if ($A > 55) {
        $A = 35;
        
    }
    if ($B > 96) {
        $B = 64;
    }
   
    
    }
}