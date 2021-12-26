<?php

namespace App;
require_once 'functions/functions.php';

// Exercise 4.1

$myList = [1, 2, 3, 3, 4, 5, 6, 7, 8, 9, 9];
$result = removeDuplicatesList($myList);
var_dump($result);


// Exercise 4.2, vykresli pomocou foreach
// W3resource Exercise 13
// Write a PHP script to display string, values within a table.


$tableRows = [];
$tableRows['A'] = 1000;
$tableRows['B'] = 1200;
$tableRows['C'] = 1400;

echo '<table border=1 cellspacing=0 cellpadding=0>';
foreach ($tableRows as $employee => $tableRow) {
    echo "Salary of Mr. $employee is $tableRow <br>";
}
echo '</table>';

//Exercise 4.3.1
// W3resource Exercise 39
// Look at the exercise 4.3.2 and 4.3.3


//Exercise 4.3.2

$file = 'application.php';
echo fileExistAndSize($file);


//Exercise 4.3.3
writingToAFile('test.txt','ahoj');


//Exercise 4.4 function randomWords
$words = [];
$words [] = "PHP";
$words [] = "AJ";
$words [] = "sport";

randomWords($words);

