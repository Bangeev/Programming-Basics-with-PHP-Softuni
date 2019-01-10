<?php

$num1 = intval(readline());
$num2 = intval(readline());
        $operation = strval(readline());
 
       $type = "";
 
        switch ($operation) {
            case '+':
                $sum = $num1 + $num2;
 
                if ($sum % 2 == 0) {
                    $type = "even";
                } else {
                    $type = "odd";
                }
                printf("%d %s %d = %d - %s", $num1, $operation, $num2, $sum, $type);
                break;
            case '-':
                $diff = $num1 - $num2;
                if ($diff % 2 == 0) {
                    $type = "even";
                } else {
                    $type = "odd";
                }
                printf("%d %s %d = %d - %s", $num1, $operation, $num2, $diff, $type);
                break;
            case '*':
                 $product = $num1 * $num2;
                if ($product % 2 == 0) {
                    $type = "even";
                } else {
                    $type = "odd";
                }
                printf("%d %s %d = %d - %s", $num1, $operation, $num2, $product, $type);
                break;
            case '/':
                
                if ($num2 != 0) {
                    $division = $num1 * 1.0 / $num2;
                    printf("%d %s %d = %.2f ", $num1, $operation, $num2, $division);
                }else{
                    printf("Cannot divide %d by zero", $num1);
                }
                break;
            case '%':
 
                if ($num2 != 0) {
                    $left = $num1 % $num2;
                    printf("%d %s %d = %d ", $num1, $operation, $num2, $left);
                }else{
                    printf("Cannot divide %d by zero", $num1);
                }
                break;
 
        }