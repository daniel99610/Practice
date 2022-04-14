<?php

/*
Decimals are real numbers
Decimals have decimal points
Use round() method with precision

*/

// define and print decimal variables
$totalScore = 78.87; // if you remove the .78 and leave 78 then it is an integer
//echo $totalScore; // whenever you have a decimal point in the integers then it is stored as a decimal variable

// nnegative decimals such as temperatures

$temperature = -40.23;
//echo $temperature;

//round a double value

$price = 4.99;
// echo round($price);


// compare two double with precision(you want to compare some negligible amount after the dot)0.1 = 1.87 ~ 1.97
$price = 1.87;
$bid = 1.97;
// this method abs will find the absolute value, if the absolute value is less than the precision value (accepting value) then it accepts it
echo ( abs($price - $bid) < 0.1 ) ? "Accepting" : "Rejected"; // trying to find the precision, the difference between these 2, if the difference is less than 0.1 then accepting, something like that
// if you change the value of $bid from 1.97 to 1.99 it would be rejected because it is not within 0.1
?>