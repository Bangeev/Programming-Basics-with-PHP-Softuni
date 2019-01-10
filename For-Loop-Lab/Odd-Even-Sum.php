<?php

$n = intval(readline());
$even = 0;
$odd = 0;

for($i = 0; $i < $n; $i++){
    
    if ($i % 2 == 0) {
        $even += intval(readline());
    }else{
        $odd += intval(readline());
    }
}
if($even == $odd){
    echo "Yes Sum = $even";
}else{
    printf("No Diff = %d", abs($even - $odd));
}