<?php

$bonus = intval(readline());
//$bonus = 10;

if ($bonus <= 100){
    $bonus = $bonus / 1000;
}
//} elseif ($points > 100 && $points <= 1000){
//    $bonus = $bonus + ($points * 0.2);
//} else {
//     $bonus = $bonus + ($points * 0.1);
//}
//   
//if ($points % 2 == 0) {
//    $bonus = $bonus + 1;
//}elseif ($points % 10 == 5) {
//    $bonus = $bonus + 2;
//}
echo $bonus . PHP_EOL;
//echo $bonus + $points;