<?php


/* 
Integers are whole numbers
Integer values do not have decimals
Integers could have + or - values
Integer Variable can hold Octal (base 8), Hexadecimals(base 16) and Binary (base 2) Values
Every Platform will have limited integer number to be defined. based on cpu and ram the processing power
Constant PHP_INT_SIZE can be used to find out the integer
limitation on how many numbers you can define and store in that variable

*/

// define and print integer variable
$marks = 87;
// echo $marks;


//HexDecimal Variable
// use a decimal to hexadecimal converter on google
$marks = 0x19F2D7C1;//435345345;
// echo $marks;

//String to integer addition
$marks = 10;
$total = "1000" + $marks; // we are using a mathematical operator +
// echo $total;
// even though there is a string to integer operation, php will convert this string into an integer if it is an integer value and then does the operation
// this is type casting automatically happening for us



// negative numbers 
$finalMarks = 5 - 10;
// echo $finalMarks;

$finalMarks = -5 + 5;
// echo $finalMarks;

//Windows
// echo PHP_INT_SIZE;
echo PHP_INT_MAX;
// size of the integer limit is 8
// size of the integer max is 9223372036854775807 maximum integer value you can have for integers
// the system will not be able to handle any of the integers after this number
// this is the maximum integer value we can assign to an integer variable
?>


