<?php

/*
= - Assignment Operator used to assign values
+= - Add Assignment operator - .=
-= - Subtract Assignment operator
*= - Multiple Assignment operator
/= - Divide Assignment operator
%= - Modulus Assignment

*/

//assign value 10 to variable $marks
$marks = 10;


//assign any name string to variable $name
$name = "John, Smith";

// Use += Operator
$counter = 1;
$counter = $counter + 1; // this is the same as the below code
$counter += $counter; // this means $counter is = $counter + 1 its another way of doing the above code
// echo $counter;


$marks += 10; // this would be whatever the $marks value, it is incremented by 10. we know $marks is = to 10 and then this adds 10
echo $marks;

echo $name;
$name1 = "John";
$name1 .= ", ";
$name1 .= "Smith";
echo $name1


?>