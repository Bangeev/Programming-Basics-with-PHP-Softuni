<?php
 
while (true) {
    $sumMoney = 0;
    $destination = readline();
    if ($destination == "End") {
        break;
    }
    $minBudget = intval(readline());
    for ($i = 0; $i <= $minBudget; $i++) {
        $savedMoney = intval(readline());
        $sumMoney += $savedMoney;
        if ($sumMoney >= $minBudget) {
            echo "Going to $destination!" . PHP_EOL;
            break;
        }
    }
}