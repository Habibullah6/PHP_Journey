<?php

$number = 5;

if($number % 2 == 0){
    echo "this is the even number";
}
else if ($number < 10) {
    echo "the number is smaller than 10";
}
elseif ($number > 3) {
    echo "the number is greater than 3";
}

else {
    echo "the number is unique";
}

echo "\n";
echo "\n";
echo "\n";

$food = "orange";

if ("apple" == $food){
    echo "{$food} contains vitamin and minerals";
}
elseif("apple" == $food || "orange" == $food){
    echo "{$food} contains vitamin and minerals";
}

else {
    echo "{$food} I don't know";
}
