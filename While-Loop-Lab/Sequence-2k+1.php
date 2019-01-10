<?php

$num = 1;
$n = intval(readline());

while ($num <= $n) {
    echo $num . PHP_EOL;
   $num = 1 + (2 * $num);
}
