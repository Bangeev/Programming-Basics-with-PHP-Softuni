<?php

$whiskey = doubleval(readline());
$beerL = doubleval(readline());
$wineL = doubleval(readline());
$RAKIQL = doubleval(readline());
$whiskeyL = doubleval(readline());


$priceRakiqL = $whiskey / 2;
$priceWineL = $priceRakiqL - (0.4 * $priceRakiqL);
$priceBeerL = $priceRakiqL - (0.8 * $priceRakiqL);


$priceForRakiq = $RAKIQL * $priceRakiqL;
$priceForWine = $wineL * $priceWineL;
$priceForBeer = $beerL * $priceBeerL;
$priceForWhiskey = $whiskeyL * $whiskey;

$priceForEverything = $priceForRakiq + $priceForWine + $priceForBeer + $priceForWhiskey;
printf("%.2f", $priceForEverything);


