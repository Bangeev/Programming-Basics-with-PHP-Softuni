<?php

$firstname = strval(readline());
$lastname = strval(readline());
$age = intval(readline());
$town = strval(readline());
printf("You are %s %s, a %d-years old person from %s.",$firstname ,$lastname, $age, $town);