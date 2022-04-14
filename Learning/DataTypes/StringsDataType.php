<?php

/* 
strings are defined in double quotes and single quotes
double quotes string will interpolate variables which means it will assign the value of that variable
no limit to how much string variable holds but limited with system memory
use escape characters to escape double quotes

*/

// define string and use strings
$name1 = "John, Smith";
$name2 = "John, Smith";

echo "$name1 and $name2"

// single quotes does not replace the variable with the variable value it just prints whatever is inside the single quotes '$name1 and $name2'

//combine string
$name3 = $name1 . " - " . $name2;
echo $name3;


// use back slash to escape the characters
$name4 = "This is a \"Special\" String";
echo $name4 .;

$name4 = "\t\tThis is a \"Special\" String";
echo $name4 .;
?>