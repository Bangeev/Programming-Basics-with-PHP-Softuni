<?php

$SlabaOcenkaLimit = intval(readline());
$broislabiOceni = 0;
$broiProblemi = 0;
$SumaOcenka = 0;
$poslednaZadIme = "";
$ImeProblem = "";
$ocenka = 0;

while (true) {
    $ImeProblem = readline();
    if ($ImeProblem == "Enough") {
        break;
    }
    $ocenka = floatval(readline());
    $SumaOcenka += $ocenka;
    $poslednaZadIme = $ImeProblem;
    $broiProblemi++;
    if ($ocenka <= 4) {
        $broislabiOceni++;
        if ($broislabiOceni >= $SlabaOcenkaLimit) {
            break;
        }
    }
}

if ($broislabiOceni < $SlabaOcenkaLimit) {
   printf("Average score: %.2f" . PHP_EOL , $SumaOcenka / $broiProblemi);
    printf("Number of problems: %d" . PHP_EOL, $broiProblemi);
    printf("Last problem: %s", $poslednaZadIme);
}else{
    printf("You need a break, %d poor grades.", $broislabiOceni);
}
