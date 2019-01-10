<?php
$start = 5364;
$counter = 1;

while (true) {
    $command = strtolower(readline());
   
    if ($command == "end") {
       
        
        break;
    }
    elseif ($command == "yes") {
        $counter++;
       
        
        
    }
    if ($counter > 5 ) {
        break;
    }
    $meters = intval(readline());
   $start += $meters;
      if ($start >= 8848) {
        break;
    }
    
}
if ($start >= 8848) {
            echo "Goal reached for $counter days!";
            
        } else {
            echo "Failed!" . PHP_EOL;
        echo $start;
}