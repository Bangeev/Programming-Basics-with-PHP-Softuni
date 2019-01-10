<?php

 $N = intval(readline());
            $M = intval(readline());
            $S = intval(readline());

            for ($i = $M; $i >= $N; $i--)
            {
                if ($i % 2 == 0 && $i % 3 == 0 )
                                        
                   {
                        
                        if ($i == $S){
                        break;
                        }
                        echo $i . " ";
                        
                    }
            
            }