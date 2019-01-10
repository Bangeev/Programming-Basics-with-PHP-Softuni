<?php

$n = intval(readline());
$countP1 = 0;
$countP2 = 0;
$countP3 = 0;
$countP4 = 0;
$countP5 = 0;
$p1 = 0;
$p2 = 0;
$p3 = 0;
$p4 = 0;
$p5 = 0;

for($i = 0; $i < $n;$i++){
    $num = intval(readline());
    switch ($num) {
        case ($num < 200): $countP1++;
            $p1 = $countP1 / $n * 100;
            
        break;
        case ($num >= 200 && $num <= 399):$countP2++;
            $p2 = $countP2 / $n * 100;
            break;
         case ($num >= 400 && $num <= 599):$countP3++;
            $p3 = $countP3 / $n * 100;
            break;
         case ($num >= 600 && $num <= 799):$countP4++;
            $p4 = $countP4 / $n * 100;
            break;
         case ($num >= 800):$countP5++;
            $p5 = $countP5 / $n * 100;
            break;
    }
}



echo number_format($p1, 2, '.', '') . "%" . PHP_EOL;
echo number_format($p2, 2, '.', '') . "%" . PHP_EOL;
echo number_format($p3, 2, '.', '') . "%" . PHP_EOL;
echo number_format($p4, 2, '.', '') . "%" . PHP_EOL;
echo number_format($p5, 2, '.', '') . "%";
