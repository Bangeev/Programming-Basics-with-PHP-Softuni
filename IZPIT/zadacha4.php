<?php

$count = 0;
$count2 = 0;
$moneyone = 0;
$moneytwo = 0;
while (true) {
    
    $godini = readline();
    if ($godini == "Christmas") {
        break;
    }
    if ($godini <= 16) {
        $count++;
        $moneyone += 5;
        
    } elseif ($godini > 16) {
        $count2++;
        $moneytwo +=  15;
    }
    
}

echo "Number of adults: $count2" . PHP_EOL;
echo "Number of kids: $count" . PHP_EOL;
echo "Money for toys: $moneyone" . PHP_EOL;
echo "Money for sweaters: $moneytwo";