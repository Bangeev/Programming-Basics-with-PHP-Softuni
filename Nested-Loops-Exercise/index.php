<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a = intval(readline());
$b = intval(readline());
$c = intval(readline());
$d = intval(readline());

for ($i = $a;$i <= $b; $i++){
    for($o =$a; $o <= $b; $o++){
        for($p = $c; $p <= $d; $p++){
            for($l = $c; $l <= $d;$l++){
                
                if(($i + $l) == ($o + $p) && ($i != $o) && ($p != $l)){
                    echo $i . $o . PHP_EOL;
                    echo $p . $l . PHP_EOL;
                    echo PHP_EOL;
}
                
            }
        }
    }
}
