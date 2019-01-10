<?php

$steps = readline();
           $allSteps = 0;
            $krachki = 0;
 
            while ($allSteps < 10000)
            {
                if ($steps != "Going home")
                {
                    $krachki = intval($steps);
                    $allSteps += $krachki;                    
                    if ($allSteps >= 10000)
                    {
                        printf("Goal reached! Good job!");
                        break;
                    }
                    $steps = readline();
                }                
                else
                {
                    $steps = readline();
                    $krachki = intval($steps);
                    $allSteps += $krachki;
                   
                    if ($allSteps<10000)
                    {
                        $allSteps = 10000 - $allSteps;
                        printf("$allSteps more steps to reach goal.");
                    }
                    else
                    {
                        printf("Goal reached! Good job!");
                    }
                    break;
                }
               
            }