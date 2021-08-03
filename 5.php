<?php
/* 
5- Write a script to shuffle array elements.
   (Don’t use shuffle predefined function).
*/
// using shuffle() 

$a = array
	(
		"a"=>"Ram",
		"b"=>"Shita",
		"c"=>"Geeta",
		"d"=>"geeksforgeeks"
	);

shuffle($a);
echo "<pre>";
print_r($a);
echo "</pre>";

// using array_rand() Returns a random key from an array, or an array of random keys
// if you specify that the function should return more than one key
$animals = array("lions", "tigers", "bears", "kittens");
$new_animals_array = array_rand($animals, 3);
echo "<pre>";
var_dump($new_animals_array);
echo "</pre>";

