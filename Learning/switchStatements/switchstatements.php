<?php

$input_number = 10;
$result = $input_number % 2;
if( $input_number > 10){
    echo "Number greater than 10";
}else if ( $input_number == 10){
    echo "Number equal to 10";  
}



// whatever the variable is here. if it matches with a case then that case will be executed
switch($result){
    case 1:
        echo 'Odd Number';
        break; // this is to break out of the case
    case 0:
        echo 'Even Number';
        break;
    default:
       echo 'Invalid Input';
}

/*

this how you write a switch statement
you put switch then you put a variable (basically a condition)
the value of that condition you check with the case
if the result is 1 then the 'odd number' will be executed
if the result is 0 then the 'even number' will be executed
if nothing is found then 'invalid input will be executed

*/


// check if the input_number is greater than 10

if( $input_number > 10){
    echo "Number greater than 10";
}else if ( $input_number == 10){
    echo "Number equal to 10";  
}else {                        
    echo "Number less than 10";
}

switch( true){

    case $input_number > 10;
            echo "Number greater than 10";
            break;
    case $input_number == 10;
            echo "Number greater than 10";
            break;
    default:
            echo "Number less than 10";

    // if nothing is true then the false condition which is the default condition will get executed 
}

// string based condition
// we have a weekday variable which has fri 
// you want to find out the full form of "Fri"
// then you bring a switch and if it matches with that string then it will print out friday and if nothing is matched others is printed 
// if mon is matched then monday is printed
$weekday = "Fri";
switch($weekday){
    case "Mon":
        echo 'Monday';
        break; // if you dont have a break and you want to execute monday, friday will also get executed 
    case "Fri":
        echo 'Friday';
        break;
    default:
}


?>