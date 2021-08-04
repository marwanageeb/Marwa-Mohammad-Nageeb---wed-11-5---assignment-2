<?php
/*
6- Write a script to calculate the number of digits in an integer.
   (Without converting it to any other data type) 
*/

$num_float = 37685649.1254; //declare number with datatype float.

$int_num = intval($num_float); //intval() is function returns the integer value of variable.

$digit_in_int = strlen($int_num); //strlen() is function returns the length of a string

echo "The Number Of Digits Is = " . $digit_in_int; //print  the number of digits 

//or
$n = 3459888;
    $count = 0;
    while ($n != 0)
    {
        $n = round($n / 10);
        ++$count;
    }

echo "Number of digits : " . $count;
