<?php

$fname = "donald";
$mname = "J";
$lname = "trump";

printf('the full name is %3$s %1$s %2$s', $fname, $mname, $lname);

echo "\n";
echo "\n";

$decimal = 42;

printf("Decimal: %d, Binary: %b, Octal: %o, Hexadecimal: %x", $decimal, $decimal, $decimal, $decimal);

// Common Format Specifiers
// Here are some of the most common format specifiers you can use:

// %s: String.
// %d: Decimal (integer) number.
// %f: Floating-point number.
// %b: Binary number.
// %o: Octal number.
// %x: Hexadecimal number (lowercase).
// %X: Hexadecimal number (uppercase).
// %%: A literal % character.

echo "\n";
echo "\n";
echo "\n";
// example 1
$name = "max";
$age = 25;

printf("my name is %s and i'm %d year old", $name, $age);

// example 2

$amount = 120.3655235;

printf("the total amount is %.4f", $amount);


echo "\n";
echo "\n";
echo "\n";

$name = "John";
$age = 30;
$formatted_string = sprintf("My name is %s and I am %d years old.", $name, $age);
echo $formatted_string;




