<?php

$a = intval(readline());
$b = intval(readline());
$h = intval(readline());
$procent = 1 - (doubleval(readline()) * 0.01);
$obem = ($a*$b*$h) * 0.001;
$NujniLitri = $obem *$procent;
printf("%.3f", $NujniLitri);
