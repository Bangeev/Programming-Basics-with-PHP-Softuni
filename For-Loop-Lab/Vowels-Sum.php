<?php

$string = readline();
$sum = 0;
for($i = 0; $i < strlen($string); $i++){
    $bukva = $string[$i];
    if ($bukva == 'a') 
        $sum +=1;
    elseif ($bukva == 'e') 
        $sum +=2;
    elseif ($bukva == 'i') 
        $sum +=3;
    elseif ($bukva == 'o') 
        $sum +=4;
    elseif ($bukva == 'u') 
        $sum +=5;

}
echo $sum;