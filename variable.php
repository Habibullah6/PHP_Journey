<?php

// variable

$name = "John";
$age = 30;
echo $name . " is " . $age . " years old.";
echo "\n";
echo "\n";


// constant variable

define("SITE_NAME", "LeadMovie");
define("MAX_USERS", 100);

// echo SITE_NAME;

$number = 10;
$text = "Hello, World!";
$array = array(1, 2, 3);

var_dump($number);
var_dump($text);
var_dump($array);

// ----------------------------------------------

$myDetails = "I am

Habibullah. I am from

Bangladesh";

echo $myDetails;

$name = "Habibullah";
$age = 26;

printf("my %sname is %s. I am %s year old", 'full', $name, $age);
