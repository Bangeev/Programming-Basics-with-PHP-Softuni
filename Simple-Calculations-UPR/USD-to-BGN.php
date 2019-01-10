<?php

$usd = floatval(readline());
$bgn = 1.79549;
$convert = $usd * $bgn;
echo round($convert, 2);
