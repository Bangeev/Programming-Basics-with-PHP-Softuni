<?php

$n = intval(readline());
$counter = 0;

for($i = 0;$i <= $n;$i++){
   
    for($j = 0;$j <= $n;$j++){
   
        for($k = 0; $k <= $n; $k++){
        
            for($l = 0;$l <= $n; $l++){
       
                for($m = 0;$m <= $n; $m++){
        
                    $combinations = $i + $j + $k + $l + $m;
                    if($combinations === $n){
                        $counter++;
                        
                    }
                }
            }
        }
    }
    
}
echo $counter;


