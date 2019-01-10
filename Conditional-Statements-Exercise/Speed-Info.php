<?php

$speed = doubleval(readline());


if ($speed <= 10) {
    echo "slow";
} elseif ($speed > 10 && $speed <= 50) {
    echo "average";
} elseif ($speed > 50 && $speed <= 150) {
    echo "fast";
} elseif ($speed > 150 && $speed <= 1000) {
    echo "ultra fast";
} else {
    echo "extremely fast";
}