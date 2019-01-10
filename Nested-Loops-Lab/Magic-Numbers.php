<?php


$magic = intval(readline());
 
        for ($d1 = 0; $d1 <= 9; $d1++) {
            for ($d2 = 0; $d2 <= 9; $d2++) {
                for ($d3 = 0; $d3 <= 9; $d3++) {
                    for ($d4 = 0; $d4 <= 9; $d4++) {
                        for ($d5 = 0; $d5 <= 9; $d5++) {
                            for ($d6 = 0; $d6 <= 9; $d6++) {
                                if ($d1 * $d2 * $d3 * $d4 * $d5 * $d6 == $magic) {
                                    printf("%d%d%d%d%d%d ",$d1,$d2,$d3,$d4,$d5,$d6);
                                }
                            }
                        }
                    }
                }
            }
        }