<?php

$projection = strtolower(readline());
$rows = intval(readline());
$cols = intval(readline());
$count = $rows * $cols;
$price = 0;

if ($projection == "premiere") {
    $price = $count * 12.00;
}elseif ($projection == "normal") {
    $price = $count * 7.50;
}elseif ($projection == "discount") {
    $price = $count * 5.00;
}

printf("%.2f\nleva", $price);