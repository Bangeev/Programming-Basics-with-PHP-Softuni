<?php

$num = doubleval(readline());
$inputMetrics = strval(readline());
$outputMetrics = strval(readline());

if ($outputMetrics == "mm")
        $num = $num * 1000;
if ($outputMetrics == "cm") 
        $num = $num * 100;
if ($outputMetrics == "mi") 
        $num = $num * 0.000621371192;
if ($outputMetrics == "in") 
        $num = $num * 39.3700787;
if ($outputMetrics == "km") 
        $num = $num * 0.001;
if ($outputMetrics == "ft") 
        $num = $num * 3.2808399;
if ($outputMetrics == "yd") 
        $num = $num * 1.0936133;
        
    
if ($inputMetrics == "mm")
        $num = $num / 1000;
if ($inputMetrics == "cm") 
        $num = $num / 100;
if ($inputMetrics == "mi") 
        $num = $num / 0.000621371192;
if ($inputMetrics == "in") 
        $num = $num / 39.3700787;
if ($inputMetrics == "km") 
        $num = $num / 0.001;
if ($inputMetrics == "ft") 
        $num = $num / 3.2808399;
if ($inputMetrics == "yd") 
        $num = $num / 1.0936133;

     
    
    printf("%.8f", $num);
