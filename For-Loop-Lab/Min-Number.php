<?php

$n = intval(readline());
$result = PHP_INT_MAX;
for($i = 0; $i < $n; $i++){
    $sum = intval(readline());
    if ($result > $sum) {
        $result = $sum;
    }
}
echo "$result";