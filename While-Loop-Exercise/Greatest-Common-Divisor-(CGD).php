<?php

$a = intval(readline());
$b = intval(readline());

while ($b != 0) {
    $temp = $b;
    $b = $a % $b;
    $a = $temp;
}
echo "$a";