<?php
/* 
3- We have an array $salaries which contains integers and floats.
Write a script to round the floats and format all numbers.
*/
 $salaries = [4567.95, 4000 , 5600 , 7340.23 , 4320.45 , 3000 ,7633.56];
 // echo Array before round the floats
 echo "<pre>";
 print_r($salaries);
 echo "</pre>";

 foreach($salaries as $value)
 { 
     $numbers[] = round($value ,0); // rounds a floating-point number.
 }
 // echo "Array after round the floats "."
 echo "<pre>";
 print_r($numbers); 
 echo "</pre>";
