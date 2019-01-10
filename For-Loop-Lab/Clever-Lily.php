




<?php
$age = intval(readline());
        $wash = floatval(readline());
        $price = intval(readline());

        $toys = 0;
        $cash = 0;
        $broThief = 0;
        $cashtwo = 0;


        for ($i = 1; $i <= $age; $i++) {

            if ( $i % 2 == 0) {
                $cash += 10;
                $cashtwo += $cash;
                $broThief++;
            } else {
                $toys++;
            }

        }

        $c = $cashtwo + ($toys * $price) - $broThief;

        if ($c >= $wash) printf( "Yes! %.2f", $c - $wash );
        else printf( "No! %.2f", $wash - $c );
        