<?php
//W3resource Exercise 13
//Write a PHP script to display string, values within a table.
//uloha 4.2, vykresli pomocou foreach


$tableRows = [];
$tableRows['A'] = 1000;
$tableRows['B'] = 1200;
$tableRows['C'] = 1400;

echo '<table border=1 cellspacing=0 cellpading=0>';
foreach ($tableRows as $employee => $tableRow) {
    echo "Salary of Mr. $employee is $tableRow <br>";
}
echo '</table>';



$myList = [1, 2, 3, 3, 4, 5, 6, 7, 8, 9, 9];
$result = removeDuplicatesList($myList);
var_dump($result);
