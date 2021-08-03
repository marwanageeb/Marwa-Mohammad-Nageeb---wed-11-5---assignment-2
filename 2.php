<?php
/* 
2- Removing elements from numeric arrays causes missing indexes.
 Write a script to reset the array indexes. (You can use any predefined functions)
*/
$colors = array("red","black","blue","green");
      array_splice($colors, 1, 1); //remove second element, re-index array
        echo"<pre>";
        print_r($colors);
        echo"</pre>";
