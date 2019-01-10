<?php

$figura = strval(readline());

if ($figura === "circle"){
    $r = floatval(readline());
    echo pi() * $r * $r;
    
}elseif ($figura === "triangle") {
    $a = floatval(readline());
    $b = floatval(readline());
    echo ($a * $b) / 2;
    
}elseif ($figura === "square") {
    $a = floatval(readline());
    echo $a * $a;
    
}elseif ($figura === "rectangle") {
    $a = floatval(readline());
    $b = floatval(readline());
    echo $a * $b;
}