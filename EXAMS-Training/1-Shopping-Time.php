<?php



$restTime = readline();
$onePartPrice = floatval(readline());
$oneProgramPrice = floatval(readline());
$frapePrice = floatval(readline());

$freeTimeForPeterAfterHeBuyFrape = $restTime - 5;
$buyPcParts = 3 * 2;
$buyPcPrograms = 2 * 2;
$timeForChill = $freeTimeForPeterAfterHeBuyFrape - ($buyPcParts +$buyPcPrograms);
$spentMoneyForParts = 3 * $onePartPrice;
$spentMoneyForPrograms = 2 * $oneProgramPrice;
$totalMoneySpend = $spentMoneyForParts +$spentMoneyForPrograms + $frapePrice;

printf("%.2f" . PHP_EOL, $totalMoneySpend);
echo $timeForChill;
