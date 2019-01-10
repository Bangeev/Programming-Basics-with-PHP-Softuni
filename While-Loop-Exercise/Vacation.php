<?php

$money = floatval(readline());
$savedMoney = floatval(readline());
$dayCount = 0;
$count = 0;
while (true) {
    $command = strval(readline());
    $dayMoney = floatval(readline());
    $dayCount++;
    if ($command == "spend") {
        $count++;
        $savedMoney -= $dayMoney;
        if ($dayMoney > $savedMoney) {
            $savedMoney = 0;
        }
    } elseif ($command == "save") {
        $count = 0;
        $savedMoney += $dayMoney;
        
        
        }
        if ($savedMoney >= $money) {
            printf("You saved the money for %d days.", $dayCount);
            return;
            }
        if ($count >= 5) {
                echo "You can't save the money." . PHP_EOL;
                echo "$dayCount";
                break;
            }
        }
            
