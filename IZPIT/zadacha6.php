

<?php
$gay = intval(readline());

$name = readline();


while ($name != "stop") {
$name = readline();
$score = 0;


$score += ord($name);

 if ($score < $gay) {

echo "Item successfully purchased!";



}else{
    echo "Not enough money!";
    break;
}



}
$gayy = $gay - $score;
echo "Money left: $gayy";
