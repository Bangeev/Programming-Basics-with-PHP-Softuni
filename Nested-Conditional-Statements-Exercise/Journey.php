<?php

$budget = floatval(readline());
        $season = strval(readline());
 
        $destination = "";
        $placeToStand = "";
        $price = 0;
 
        //Ако е лято ще почива на къмпинг, а зимата в хотел.
        // Ако е в Европа, независимо от сезона ще почива в хотел.
 
        if($budget <= 100){
            $destination = "Bulgaria";
            if($season=="summer"){
                $price = 0.3 * $budget;
                $placeToStand = "Camp";
            }else if($season=="winter"){
                $price = 0.7 * $budget;
                $placeToStand = "Hotel";
            }
        }else if($budget <= 1000){
            $destination = "Balkans";
            if($season == "summer"){
                $price = 0.4 * $budget;
                $placeToStand = "Camp";
            }else if($season =="winter"){
                $price = 0.8 * $budget;
                $placeToStand = "Hotel";
            }
        }else if($budget > 1000){
            $destination = "Europe";
            $price = 0.9 * $budget;
            $placeToStand = "Hotel";
        }
 
 
      printf("Somewhere in %s\n",$destination);
        printf("%s - %.2f",$placeToStand,$price);