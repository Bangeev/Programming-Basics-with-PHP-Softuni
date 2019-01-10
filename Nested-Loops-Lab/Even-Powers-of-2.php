<?php

$n = intval(readline());

$current = 1;

for($i = 0; $i <= $n; $i += 2) {
    echo $current . PHP_EOL;
    $current = $current * 4;
}