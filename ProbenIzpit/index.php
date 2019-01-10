<?php
//
//$foodMoney = floatval(readline());
//$SuvenirMoney = floatval(readline());
//$hotelMoney = floatval(readline());
//$putqLitri = 420 / 100 * 7;
//$putqMoney = $putqLitri * 1.85;
//
//$prestoi = 3 * $foodMoney + 3 * $SuvenirMoney;
//
//$firstday = $hotelMoney * 0.9;
//$secondDay = $hotelMoney * 0.85;
//$thirdDay = $hotelMoney * 0.8;
//
//$obshtovscko =  $putqMoney + $firstday +$secondDay + $thirdDay + $prestoi;
//
//printf("Money needed: %.2f", $obshtovscko );



//
//$shirochina = floatval(readline());
//$duljina = floatval(readline());
//$visochina = floatval(readline());
//$astronafVisok = floatval(readline());
//
//
//$obemRaketa = $shirochina * $duljina * $visochina;
//$obemStaq = ($astronafVisok + 0.40) * 2 * 2;
//$mqsto = floor($obemRaketa / $obemStaq);
//
//
//if ($mqsto >= 3 && $mqsto <= 10) {
//    echo "The spacecraft holds $mqsto astronauts.";
//}elseif ($mqsto < 3) {
//    echo "The spacecraft is too small.";
//}elseif($mqsto > 10){
//echo "The spacecraft is too big.";
//}




$vidsushi = strval(readline());
$restorant = strval(readline());
$porcii = intval(readline());
$Porucka = strval(readline());
$sushi = 0;
$YesNo = 0;
switch ($vidsushi) {
    case $vidsushi == "sashimi": 
        if ($restorant == "Sushi Zone") {
            $sushi = 4.99;
            $sushi *= $porcii;
           
        }
        if ($restorant == "Sushi Time") {
            $sushi = 5.49;
            $sushi = $sushi * $porcii - 3 ;
           
        }
        if ($restorant == "Sushi Bar") {
            $sushi = 5.25;
            $sushi *= $porcii;
           
        }
        if ($restorant == "Asian Pub") {
            $sushi = 4.50;
            $sushi *= $porcii;
            
        }
        break;
    case $vidsushi == "maki":
        if ($restorant == "Sushi Zone") {
            $sushi = 5.29;
            $sushi *= $porcii;
            
        }
        if ($restorant == "Sushi Time") {
            $sushi = 4.69;
            $sushi *= $porcii;
            
        }
        if ($restorant == "Sushi Bar") {
            $sushi = 5.55;
            $sushi *= $porcii;
           
        }
        if ($restorant == "Asian Pub") {
            $sushi = 4.80;
            $sushi *= $porcii;
          
        }
        
        break;
    case $vidsushi == "uramaki":
        if ($restorant == "Sushi Zone") {
            $sushi = 5.99;
            $sushi *= $porcii;
            
        }
        if ($restorant == "Sushi Time") {
            $sushi = 4.49;
            $sushi *= $porcii;
            
        }
        if ($restorant == "Sushi Bar") {
            $sushi = 6.25;
            $sushi *= $porcii;
            
        }
        if ($restorant == "Asian Pub") {
            $sushi = 5.50;
            $sushi *= $porcii;
           
        }
        break;
    case $vidsushi == "temaki":
        if ($restorant == "Sushi Zone") {
            $sushi = 4.29;
            $sushi *= $porcii;
           
        }
        if ($restorant == "Sushi Time") {
            $sushi = 5.19;
            $sushi *= $porcii;
            
        }
        if ($restorant == "Sushi Bar") {
            $sushi = 4.75;
            $sushi *= $porcii;
           
        }
        if ($restorant == "Asian Pub") {
            $sushi = 5.50;
            $sushi *= $porcii;
        }
        break;

  
}

if ($Porucka == "Y" && $restorant == "Asian Pub" || $restorant == "Sushi Bar" || $restorant == "Sushi Time" || $restorant == "Sushi Zone") {
                $YesNo = $sushi * 0.20;
                
                $sushi = $sushi + $YesNo;
   printf("Total price: %d lv.", ceil($sushi));
            } elseif ($Porucka == "N" && $restorant == "Asian Pub" || $restorant == "Sushi Bar" || $restorant == "Sushi Time" || $restorant == "Sushi Zone") {
                printf("Total price: %d lv.", ceil($sushi));
} else {
    echo "$restorant is invalid restaurant!";
}