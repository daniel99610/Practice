<?php

// to define a constant we need a function
// define has 2 parameters. the first one is the name of the constant and the second one is the value of the constant



define ("LANGUAGE", "PHP");
$lang = LANGUAGE; // how do you assign a constant to a variable 


// do not put a $ in front of a constant because that is how you define a variable
// how does PHP understand whether this is a string or a constant
echo "This program is written using $lang <br>"; // this first one is the variable. PHP was able to interpret this one. it was able to change the value of the lang to the actual value of the lang
echo "This program is written using LANGUAGE <br>"; // this one, PHP was not able to idnetify it was a constant so it treated this one as a string. this one is inside the string quotes so it did not recognise it
echo "This program written using " . LANGUAGE . "<br>"; // here it is outside of the quotation marks which obviously define a string so PHP easily understands that this is a constant



// example 2 redefine the value of a constant 
// this will still output PHP rather than JAVA because it is a constant

define ("LANGUAGE", "JAVA");

echo "This program written using " . LANGUAGE . "<br>";

// example 3 same name with variable and constant
$LANGUAGE = "JAVA";
echo "This program written using " . $LANGUAGE . "<br>";
echo "This program written using " . LANGUAGE . "<br>";


// example 4 we will use the isset method to see whether the value is set for constant or not 
define ("NAME", "");
echo isset(NAME);
echo NAME; 

// this code would not work because you cannot use isset to verify a constant


// example 5 how to access a constant using the constant method
echo constant('LANGUAGE');


?>