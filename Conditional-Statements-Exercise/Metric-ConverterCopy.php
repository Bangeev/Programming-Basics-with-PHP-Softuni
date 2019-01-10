<?php

$size = doubleval(readline());
$sourceMetric = strval(readline());
$destMetric = strval(readline());

            if($sourceMetric == "mm")
                $size = $size / 1000;
            if($sourceMetric == "cm")
                $size = $size / 100;
            if($sourceMetric == "mi")
                $size = $size / 0.000621371192;
            if($sourceMetric == "in")
                $size = $size / 39.3700787;
            if($sourceMetric == "km")
                $size = $size / 0.001;
            if($sourceMetric == "ft")
                $size = $size / 3.2808399;
            if($sourceMetric == "yd")
                $size = $size / 1.0936133;
 
            if($destMetric == "mm")
                $size = $size * 1000;
            if($destMetric == "cm")
                $size = $size * 100;
            if($destMetric == "mi")
                $size = $size * 0.000621371192;
            if($destMetric == "in")
                $size = $size * 39.3700787;
            if($destMetric == "km")
                $size = $size * 0.001;
            if($destMetric == "ft")
                $size = $size * 3.2808399;
            if($destMetric == "yd")
                $size = $size * 1.0936133;


            printf("%.8f",$size);