<?php
$n = intval(readline());
$sum = 0;
$max = 0;

for($i = 0; $i < $n;$i++){
    $num = intval(readline());
    $sum = $sum + $num;
    if ($num > $max) {
        $max = $num;
    }
}
$sum -= $max;

 if($sum == $max){
     echo "Yes Sum = $sum";
 }else{
     printf("No Diff = %d", abs($sum - $max));
 }