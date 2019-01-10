<?php

$n = intval(readline());
$countP1 = 0;
$countP2 = 0;
$countP3 = 0;
$p1 = 0;
$p2 = 0;
$p3 = 0;


for($i = 0; $i < $n;$i++){
    $num = intval(readline());
switch ($num) {
        case ($num % 2 == 0): $countP1++;
            $p1 = $countP1 / $n * 100.0;
        break;
    }
switch ($num){
        case ($num % 3 == 0):$countP2++;
            $p2 = $countP2 / $n * 100.0;
        break;

    }
switch ($num){
        case ($num % 4 == 0):$countP3++;
            $p3 = $countP3 / $n * 100.0;
        break;

    }
    
        
}



echo number_format($p1, 2, '.', '') . "%" . PHP_EOL;
echo number_format($p2, 2, '.', '') . "%" . PHP_EOL;
echo number_format($p3, 2, '.', '') . "%";
