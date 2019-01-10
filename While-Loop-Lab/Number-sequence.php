<?php

$small = PHP_INT_MAX;
$big = PHP_INT_MIN;

while (TRUE){
    $command = readline();
    if ($command == "END") {
        break;
    }
    $num = intval($command);
    if ($num < $small) {
        $small = $num;
    }
    if ($num > $big) {
        $big = $num;
    }
}

echo "Max number: $big" . PHP_EOL;
echo "Min number: $small";