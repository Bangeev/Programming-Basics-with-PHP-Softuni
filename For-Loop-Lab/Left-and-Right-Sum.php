<?php
$n = intval(readline());


$lqvo = 0;
$dqsna = 0;
for($i = 0; $i < $n; $i++){
    $a = intval(readline());
    $lqvo = $lqvo + $a;

}
for($i = 0; $i < $n; $i++){
   
    $c = intval(readline());
    $dqsna = $dqsna + $c;
}
if ( $lqvo == $dqsna) {
    echo "Yes, sum = $lqvo" ;
}else{
    printf("No , diff = %d", abs($lqvo - $dqsna));
}