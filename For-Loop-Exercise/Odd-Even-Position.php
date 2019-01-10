<?php

$n = intval(readline());
$num = 0;
$oddSum = 0;
$oddMin = 1000000000.0;
$oddMax = -1000000000.0;
$evenSum = 0;
$evenMin = 1000000000.0;
$evenMax = -1000000000.0;


if ($n == 1) {
    $num = floatval(readline());
echo "OddSum=$num" . PHP_EOL;
echo "OddMin=$num" . PHP_EOL;
echo "OddMax=$num" . PHP_EOL;
echo "EvenSum=0" . PHP_EOL;
echo "EvenMin=no" . PHP_EOL;
echo "EvenMax=no" . PHP_EOL;



}
elseif ($n == 0) {
echo "OddSum=0" . PHP_EOL;
echo "OddMin=no" . PHP_EOL;
echo "OddMax=no" . PHP_EOL;
echo "EvenSum=0" . PHP_EOL;
echo "EvenMin=no" . PHP_EOL;
echo "EvenMax=no" . PHP_EOL;

}
 else {
    


for($i = 1; $i <= $n; $i++){
    $num = floatval(readline());
    if($i % 2 == 0){
        $evenSum += $num;
        if ($evenMin > $num) {
            $evenMin = $num;
        }
        if ($evenMax < $num) {
            $evenMax = $num;
        }
    } else {
        $oddSum += $num;
        if ($oddMin > $num){
            $oddMin = $num;
        }
        if ($oddMax < $num) {
            $oddMax = $num;
        }
    }
}

echo "OddSum=$oddSum" . PHP_EOL;
echo "OddMin=$oddMin" . PHP_EOL;
echo "OddMax=$oddMax" . PHP_EOL;
echo "EvenSum=$evenSum" . PHP_EOL;
echo "EvenMin=$evenMin" . PHP_EOL;
echo "EvenMax=$evenMax" . PHP_EOL;

 }