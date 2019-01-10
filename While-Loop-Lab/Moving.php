<?php

$width = intval(readline());
$length = intval(readline());
$height = intval(readline());
$volume = $width * $length * $height;
$hasVolume = TRUE;
$command = readline();
while ($command != "Done") {
    $box = intval($command);
    $volume -= $box;
    if ($volume < 0) {
        $hasVolume = FALSE;
        break;
    }
    $command = readline();
}
if ($hasVolume) {
    printf("%d Cubic meters left.", $volume);
} else {
    printf("No more free space! You need %d Cubic meters more.", abs($volume));
}

