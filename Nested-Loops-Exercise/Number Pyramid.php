<?php

$n = intval(readline());
        $count = 1;
        $i = 1;
        $breakChecker = false;
 
        while ($i <= $n) {
 
            $j = 1;
            if ($breakChecker) break;
 
            while ($j <= $i) {
 
                echo ($count);
 
                if ($count==$n) {
                    $breakChecker = true;
                    break;
                } else {
                    $count++; //j++ is down, cause j++ will f**k next if statement.
                }            //count++ is here, because we don't want spaces at the end of every row. (even if its short)
 
                if ($j==$i) { //because we don't want spaces in the end of the row
                    echo PHP_EOL;
                } else {
                    echo(" ");
                }
 
                $j++; //it has to be here downstairs, especially it has a dog in any fight upstairs...
            }
 
            $i++;
        }