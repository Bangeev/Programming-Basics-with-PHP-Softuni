<?php

$book = readline();
$numBooks = intval(readline());
$counter = 0;
$checkForBook = "";


while ($book != "$checkForBook") {
    $checkForBook = readline();
    $counter++;
    if ($book == "$checkForBook") {
        $counter--;
         echo "You checked $counter books and found it."; 
        break;
    } elseif ($counter >= $numBooks) {
        
    
        echo "The book you search is not here!" . PHP_EOL;
    echo "You checked $counter books.";
    break;
  
    }
}
