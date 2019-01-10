<?php

$n = intval(readline());
 
        for ($row = 0; $row < $n; $row++)
        {
            for ($col = 0; $col < $n; $col++)
            {
                $num = $row + $col + 1;
 
                if ($num > $n)
                {
                    $num = 2 * $n - $num;
                }
                echo ($num . " ");
            }
            echo PHP_EOL;
        }