<?php

 $n = intval(readline()) ;
 
        $singleDigitNum = 0;       
        $doubleDigitNum = 0;        
 
 
        $singleDigitNum = $n % 10;
       
 
        $doubleDigitNum = ($n / 10) % 10;
   
 
        $tripleDigitNum = $n / 100;

 
 
        for ($singleD = 1; $singleD <= $singleDigitNum; $singleD++)     {   
            for ($doubleD = 1; $doubleD <= $doubleDigitNum; $doubleD++)     
            {
                for ($tripleD = 1; $tripleD <= $tripleDigitNum; $tripleD++) 
                {
                   
printf("$singleD * $doubleD * $tripleD = %d;" . PHP_EOL , $singleD * $doubleD * $tripleD);
                    
                }
            }
        }