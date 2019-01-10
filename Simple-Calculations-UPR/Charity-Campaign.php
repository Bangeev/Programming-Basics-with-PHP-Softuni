<?php

$campaign = floatval(readline());
$confectioner = floatval(readline());
$cakes = floatval(readline());
$waffles = floatval(readline());
$pancakes = floatval(readline());

$cakeprice = 45;
$waffleprice = floatval(5.80);
$pancakesprice = floatval(3.20);

$cake = $cakes * $cakeprice;
$waffle = $waffles * $waffleprice;
$pancake = $pancakes * $pancakesprice;

$allForTheDay = ($cake + $waffle + $pancake) * $confectioner;
$allForTheCampaign = $allForTheDay * $campaign;
$everythingAfter = $allForTheCampaign - ($allForTheCampaign / 8) ;

printf("%.2f", $everythingAfter);