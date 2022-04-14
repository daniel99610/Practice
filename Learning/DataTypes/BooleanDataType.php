<?php
/*
True or false / true or false can be used to assign a boolean variable
Booleans are literals and are case insensitive - true or true or true are the same
True = 1 and false = 0 when displayed with echo. when you display false you wont see the false value it wil be displayed as 0
Integer variable with value 0 is false and anything else is true even if you have negative numbers like -1 that is a true value
String variable with value 0 is also false and anything else is true
Boolean is used in condition to chec something.
Operators which result into boolean conditions

*/

// define and use the boolean variable

$flag1 = TRUE;
$flag2 = FALSE;
// echo ($flag1) ? "True" : "False"; // we are not checking the value of $flag we are just checking if it is true or false in that condition



// print boolean variables
// echo "True: " . $flag .;
// echo "False: " . $flag .;

// use string as boolean condition
$isLoggedIn = true;
$userSessionName = "John, Smith";
echo ( $isLoggedIn && $userSessionName ) ? "
User Logged In ": "User Not Logged in"; 



// if you use null or 0 it is considered as false
$isLoggedIn = true;
$userSessionName = null;
echo ( $isLoggedIn && $userSessionName ) ? "
User Logged In ": "User Not Logged in"; 


// use integer variable as boolean - watchout for negative values

$marks = 1;
echo ($marks) ? "Marks has value": "Marks does not have value"
// if it is 1 then $marks has a value if it is 0 then $marks does not have a value
// condition of boolean variables 0 means false and 1 means true and when you print them it doesnt show the false variable



//operators results into boolean condition
$name = "John";
echo ( $name === "John") ? "Yes John" : "Not John";
?>