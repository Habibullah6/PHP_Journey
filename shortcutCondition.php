<?php
$year = 1894; // Replace with any year you want to check

// Check if the year is divisible by 4
if ($year % 4 == 0) {
    // If divisible by 4, check if it's divisible by 100
    if ($year % 100 == 0) {
        // If divisible by 100, check if it's divisible by 400
        if ($year % 400 == 0) {
            echo "$year is a leap year.";
        } else {
            echo "$year is not a leap year.";
        }
    } else {
        echo "$year is a leap year.";
    }
} else {
    echo "$year is not a leap year.";
}

echo "\n";
echo "\n";
echo "\n";

// echo ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) ? "$year is a leap year." : "$year is not a leap year.";

if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
echo "{$year} is leap year.";
}
else {
    echo "{$year} is not leap year.";
}

