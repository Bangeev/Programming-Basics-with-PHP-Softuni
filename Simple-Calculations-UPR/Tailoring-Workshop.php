<?php

$tables = intval(readline());
$tableLenght = floatval(readline());
$tableWidth = floatval(readline());

$tableCover = $tables * ($tableLenght + 2 * 0.30) * ($tableWidth + 2 * 0.30);

$tableCoach = $tables * ($tableLenght / 2) * ($tableLenght / 2);

$priceUSD = $tableCover * 7 + $tableCoach * 9;
$priceBGN = $priceUSD * 1.85;

  printf("%.2f" . " USD" . PHP_EOL, $priceUSD);
  printf("%.2f" . " BGN", $priceBGN );

