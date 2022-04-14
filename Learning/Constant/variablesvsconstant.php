<?php 

/*
1) No need to use $ to use the constant
2) Constant are defined only via the define method 
3) Value can be assigned only once
4) Constant has global scope. Can access anywhere 
5) Constant can be used to access the constants.

*/

$name = "John, Smith"
define (name, "John, Smith");

echo $name . name;

// able to change variable but not constant
$name = "Charles, Boyle";
define (name, "Charles, Boyle")
echo $name . name;
// this will output 1 charles boyle (the $name variable) will not output the second charles boyle because it is under a constant and you cannot change constants
?>