<?php

$n = intval(readline());
$result = 0;
for($i = 0; $i < $n; $i++){
    $sum = intval(readline());
    $result = $result + $sum;
}
echo "$result";