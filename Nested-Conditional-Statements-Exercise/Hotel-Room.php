<?php

$month = readline();
$nights = intval(readline());
     
        $priceApartment = 0;
        $priceStudio = 0;
 
        if ($month == ("May") || $month == ("October")) {
            if ($nights > 7 && $nights <= 14) {
                $priceStudio = 50 - 0.05 * 50;
                $priceApartment = 65;
            } else if ($nights > 14) {
                $priceStudio = 50 - 0.3 * 50;
                $priceApartment = 65 - 0.1 * 65;
            } else {
                $priceStudio = 50;
                $priceApartment = 65;
            }
        } else if ($month ==("June") || $month ==("September")) {
            if ($nights > 14) {
                $priceStudio = 75.20 - 0.20 * 75.20;
                $priceApartment = 68.70 - 0.1 * 68.70;
            } else {
                $priceStudio = 75.20;
                $priceApartment = 68.70;
            }
 
 
        } else if ($month ==("July") || $month == ("August")) {
            if ($nights > 14) {
                $priceApartment = 77 - 0.1 * 77;
            } else {
 
                $priceApartment = 77;
            }
            $priceStudio = 76;
        }
 
        $totalPriceForStudio = $nights * $priceStudio;
        $totalPriceForApartment = $nights * $priceApartment;
 
        printf("Apartment: %.2f lv.\n", $totalPriceForApartment);
       printf("Studio: %.2f lv.", $totalPriceForStudio);
 