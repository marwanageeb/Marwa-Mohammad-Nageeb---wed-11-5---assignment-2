<?php
/* 
1- Write a script to get longest name of array $names.
*/

$array = array("a", "Ab", "abcd", "abcdfegh", "achn");
$newArray = array_map('strlen', $array); // https://www.php.net/manual/en/function.array-map.php
$max_len = max($newArray);
$min_len = min($newArray);
echo "the longest name in the array is " . $max_len ."<br>" . "the shortest name in the array is ".$min_len;
