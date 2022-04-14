<?php

/*
Null is case insensitive. null / NULL are same
null is used to initialise a variable with empty value
unset() and is_null() methods
most common use case is to check if the variable has a value or empty

*/

// define and check null
$name = null;
echo $name;
echo ($name) ? "Has value" : "Empty";

// when you print null nothing is printed, null is a false value 

// check if the variable is null or not
$name = "0";
echo ($name) ? "Has value" : "Empty";

// the variable has a value but the it is a false value. it is not empty it actually has a value
// this will check whether the null is true or false
echo ( !is_null($name)) ? "Has value" : "Empty";

// remove the variable from the program and memory
unset($name);
echo ( !is_null($name)) ? "Has value" : "Empty";


?>