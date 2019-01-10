<?php

$productName = strtolower(readline());

if ($productName == "banana" || $productName == "apple" || $productName == "kiwi" || $productName == "cherry" || $productName == "lemon" || $productName == "grapes") {
    echo "fruit";
} elseif ($productName == "tomato" || $productName == "cucumber" || $productName == "pepper" || $productName == "carrot") {
    echo "vegetable";
} else {
    echo "unknown";
}
