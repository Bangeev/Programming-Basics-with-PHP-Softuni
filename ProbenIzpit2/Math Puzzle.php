<?php

$key = intval(readline());
$flag = false;
$flagTwo = false;
for($i =1; $i <= 30; $i++){
    for($k =1; $k <= 30; $k++){
        for($l =1; $l <= 30; $l++){
            if ($i + $k + $l == $key) {
                if ($i < $k && $k < $l) {
                    $flag = true;
                    echo $i . " + " . $k . " + " . $l . " = " . $key . PHP_EOL;
                } 
            }elseif ($i * $k * $l == $key) {
                if ($i > $k && $k > $l) {
                    $flagTwo = true;
                    echo $i . " * " . $k . " * " . $l . " = " . $key . PHP_EOL;
                }
            }
           
        }
    
    }

}
if ($flag == false && $flagTwo == false) {
    echo "No!";
}
