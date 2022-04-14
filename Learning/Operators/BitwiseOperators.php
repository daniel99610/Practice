<?php

/*

& - AND
| - OR
^ - XOR
~ - NOT 

*/

// how Bits work
// on the left are integers
// on the right are bitwise notations of the integers
// 0 - bits - 0000 
// 1 - bits - 0001
// 2 - bits - 0010
// 3 - bits - 0011
// 4 - bits - 0100
// 5 - bits - 0101



// 1 - 1 = 1-1 and 1 is 1 true and true is true 
// 0 - 0 = 0-0 and 0 is 0 false and false is false
// 0 - 1 = 0-0 and 1 is 0 false and true is false
// 1 - 0 = 0-1 and 0 is 0 true and false is false

$first = 0; //0000
$second = 1;//0001

// 0000 & 0001 : the numbers are bitwise notation and the & is a bitwise operator
// 0000 & 0001 = (0&0) & (0&0) & (0&0) & (0&1) =
echo $first & $second;


$first = 2; //0010
$second = 3; //0011
// (0010) & (0011) = (0&0) & (0&0) & (1&1) & (0&1) = 0010
echo $first & $second;

echo $first | $second; // or // 0 - 1 = 1
echo $first ^ $second; // xor // 0 - 1 = 1 and 1 - 1 = 0
echo ~$first; // invert the bits if 0 then 1 or 1 then 0
echo ~$second; 


// everything that we have on our ASCII characters or the characters that you type is converted into bits because computers only understand 0 and 1
// everything can be represented in bits 
// when you want to operate on that level at 0 and 1 you use something called bitwise operator



?>