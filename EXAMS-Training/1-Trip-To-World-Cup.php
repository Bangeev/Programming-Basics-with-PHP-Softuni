<?php

$ticketPriceGoing = floatval(readline());
$ticketPriceReturn = floatval(readline());
$ticketPriceForOneMatch = floatval(readline());
$numberMatch = intval(readline());
$discountRate = intval(readline());

$friendsNumber = 6;

$priceForFriendsPlaneTickets = $friendsNumber * ($ticketPriceGoing + $ticketPriceReturn);
$planeTicketsAfterDiscountRate = $priceForFriendsPlaneTickets - $priceForFriendsPlaneTickets * $discountRate / 100;
$fullPriceForMatchs = $friendsNumber * $numberMatch * $ticketPriceForOneMatch;
$priceToPayForMatchs = $planeTicketsAfterDiscountRate + $fullPriceForMatchs;
$priceForEvcryFriend = $priceToPayForMatchs / $friendsNumber;

printf("Total sum: %.2f lv." . PHP_EOL, $priceToPayForMatchs);
printf("Each friend has to pay %.2f lv." . PHP_EOL, $priceForEvcryFriend);