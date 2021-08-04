<?php
/* 
4- Write a script to generate a random password with a given $length.
The password can contain any ASCII character starting from 33 (! symbol) to 126 (~ symbol)
https://www.asciitable.com/
*/

$pw = ""; 
for ($i = 0; $i < 13; $i++)
{
    $pw .= chr(rand(33, 126));
}
echo $pw . "<br>" ;

//or
$a = str_split("bndeefghijklmnopqrstuvwxyABCDEFGHIJKLMNOPQRSTUVWXY012345669342");
shuffle($a);
echo implode($a); // implode() function returns a string from the elements of an array  
echo "\n".substr( implode($a), 0, 10 ) . "<br>"; //instead of 10 => any length

//or
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?"; 
$length = rand(10, 16); // rand() function generates a random integer
//  substr() is used to extract a part of string.
//  str_shuffle() function randomly shuffles all the characters of a string
//  sha1() function uses the US Secure Hash Algorithm 
$password = substr( str_shuffle(sha1(rand() . time()) . $chars ), 0, $length );
echo $password;
