<?php

$name = readline();

$winnerScore = 0;

$winnerName = '';

while ($name != "STOP") {

$score = 0;

for ($i = 0; $i < strlen($name); $i++) {

$score += ord($name[$i]);

} if ($score > $winnerScore) {

$winnerName = $name;

$winnerScore = $score;

}

$name = readline();

}

echo "Winner is $winnerName - $winnerScore!";