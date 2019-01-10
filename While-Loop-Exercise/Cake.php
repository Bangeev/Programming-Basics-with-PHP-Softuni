<?php

$width = intval(readline());
$length = intval(readline());
$cake = $width * $length;

 $pieces = 0;
while (true) {
    $piecesOfCake = strtolower(readline());
    
    $pieces += intval($piecesOfCake);
    
    if ($pieces > $cake) {
        $pieces -= $cake;
        echo "No more cake left! You need $pieces pieces more.";
        break;
    } elseif ($piecesOfCake ==  "stop") {
         $pieces -= $cake;
        printf("%d pieces are left.", abs($pieces));
        break;
    }
}



