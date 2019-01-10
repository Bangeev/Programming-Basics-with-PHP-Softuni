<?php

$Money = floatval(readline());
$gpa = floatval(readline());
$MWS = floatval(readline());
$scholarship1 = floor(0.35 * $MWS);
$scholarship2 = floor($gpa * 25);

if ($Money >= $MWS && $gpa < 5.5) {
    echo "You cannot get a scholarship!";
}elseif ($Money < $MWS && $gpa < 4.5) {
    echo "You cannot get a scholarship!";
}elseif ($Money < $MWS && $gpa >= 4.5 && $gpa <= 5.5) {
    printf("You get a Social scholarship %.0f BGN", $scholarship1);
} elseif ($Money < $MWS && $gpa > 5.5 && $scholarship1 > $scholarship2) {
    printf("You get a scholarship for excellent results %.0f BGN", $scholarship2);
} elseif ($Money < $MWS && $scholarship1 > $scholarship2) {
    printf("You get a Social scholarship %.0f BGN", $scholarship2);
} else {
     printf("You get a scholarship for excellent results %.0f BGN", floor($scholarship2));
}

