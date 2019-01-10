<?php

$floors = intval(readline());
$rooms = intval(readline());
for($i = $floors; $i >= 1; $i--) {
    for($j = 0 ; $j < $rooms;$j++) {
        if ($i == $floors) {
            
            echo "L{$i}{$j} " ;
        
            
        } elseif ($i % 2 == 0) {
            
            echo "O{$i}{$j} ";
            
        }else{
            echo "A{$i}{$j} ";
        }
    }
    echo PHP_EOL;
}