<?php

$year = strtolower(readline());
$holidays = intval(readline());
$homeTownHolidays = intval(readline());

$hDaysinYear = 48;
$hInSofia = $hDaysinYear - $homeTownHolidays;
$subotniIgriS = $hInSofia * 3.0 / 4;
$hInHomeTown = $hDaysinYear - $hInSofia;

$praznichniIgriVSofia = $holidays * 2.0 / 3;

$obshtoIgri = $subotniIgriS + $hInHomeTown + $praznichniIgriVSofia;

//viskoksna +15%

$ifYearLeapgames = $obshtoIgri * 0.15;
$obshtoIgriPrezCqLVisGod = $obshtoIgri + $ifYearLeapgames;
$obshtoIgriPrezCqLVisGod = floor($obshtoIgriPrezCqLVisGod);

if ($year == "normal") {
    printf("%.0f", floor($obshtoIgri));
} else {
    printf("%.0f", $obshtoIgriPrezCqLVisGod);
}

