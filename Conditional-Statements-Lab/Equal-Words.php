<?php

$firstWord = strval(readline());
$secondWord = strval(readline());

$firstWord = strtolower($firstWord);
$secondWord = strtolower($secondWord);
if ($firstWord == $secondWord){
    echo "yes";
} else {
    echo "no";    
}