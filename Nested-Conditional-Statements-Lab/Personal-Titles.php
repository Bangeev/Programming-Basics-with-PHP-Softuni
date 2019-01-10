<?php

$age = intval(readline());
$gender = strtolower(readline());


if ($age >= 16) {
    if ($gender == "m") {
        echo "Mr.";
    } elseif ($gender == "f") {
        echo "Ms.";
    }
} else {
    if ($gender == "m") {
        echo "Master";
        
    } elseif ($gender == "f") {
        echo "Miss";
    } 
        
    
}