<?php

$n = intval(readline());
$salary = intval(readline());


for($i = 0 ; $i < $n; $i++){
    $website = strval(readline());
    switch ($website) {
        case ($website == "Facebook"):
            $salary = $salary - 150;
            break;
        case ($website == "Instagram"):
            $salary = $salary - 100;
            break;
        case ($website == "Reddit"):
            $salary = $salary - 50;
            break;
   
    }
}
if ($salary <= 0) {
    echo "You have lost your salary.";
} else {
    echo "$salary";
}