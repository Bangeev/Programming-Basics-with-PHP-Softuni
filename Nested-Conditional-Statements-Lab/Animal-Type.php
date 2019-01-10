<?php

$animal = strtolower(readline());

switch ($animal) {
    case "dog": echo "mammal";    
        break;
    case "crocodile": echo "reptile";
        break;
    case "tortoise": echo "reptile";
        break;
    case "snake": echo "reptile";
        break;

    default: echo "unknown";
        break;
}