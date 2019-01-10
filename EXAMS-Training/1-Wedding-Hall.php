<?php
$lengthHall = floatval(readline());
$widthHall = floatval(readline());
$oneSideOfTheBar = floatval(readline());

$dancingFloar = 0.19;


$sizeOfHall = $lengthHall * $widthHall;
$sizeOfBar = $oneSideOfTheBar * $oneSideOfTheBar;
$sizeOfDancingFloar = $sizeOfHall * $dancingFloar;
$freeSpace = $sizeOfHall - $sizeOfBar - $sizeOfDancingFloar;
$numberOfGuests = $freeSpace / 3.2;
echo ceil($numberOfGuests);