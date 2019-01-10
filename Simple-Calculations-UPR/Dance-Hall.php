<?php

$l = doubleval(readline());
$w = doubleval(readline());
$a = doubleval(readline());

$hall = doubleval($l * 100 * $w * 100);
$wardrobe = doubleval($a * 100 * $a * 100);
$bench = doubleval($hall / 10);
$freeRoom = doubleval($hall - $wardrobe - $bench);

$dancers = $freeRoom / (40 + 7000);
printf(floor($dancers));

