<?php

$record = floatval(readline());
$distanceInMeters = floatval(readline());
$secondsToSwimOneMeter = floatval(readline());

$distanceForSwimInSeconds = $distanceInMeters * $secondsToSwimOneMeter;

$plusTime = floor($distanceInMeters / 15);
$plusTime *= 12.5;

$time = $distanceForSwimInSeconds + $plusTime;

$time = number_format($time, 2, '.', '');
$remainingTime = $time - $record;
$remainingTime = number_format($remainingTime, 2, '.', '');



if ($time >= $record) {
    echo "No, he failed! He was $remainingTime seconds slower.";
} else {
    echo "Yes, he succeeded! The new world record is $time seconds.";
}
