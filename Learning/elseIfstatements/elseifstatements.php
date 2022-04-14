<?php

// check for odd or even numbers and print it
// using else if


// else if, this is when you want to do an if and another if condition
// else if means you casn put 1 more curly braces and 1 more condition
$input_number = 10; // this is an even number so 'Even Number' will print on the browser. if we change this to odd number then it will print out 'odd number'
$result = $input_number % 2;
if ( $result ){
    echo 'Odd Number';

}else if ( !$result ){
    echo 'Even Number';
}

/*
if(condition1){
    code to be executed if condition1 is true
} elseif(condition2){
    code to be executed if the condition1 is false and condition2 is true
} else {
    code to be executed if both condition1 and condition2 are false
}

*/


//check if the input is greater than 10

if( $input_number > 10){ // if the if condition is true then that block gets executed
    echo "Number greater than 10";
}else if ( $input_number == 10){ // in elseif, you can have 1 more condition. if the else if condition is true then this block will be executed
    echo "Number equal to 10";  
}else {                        // you cannot write a condition in else. whatever is false, will be executed in this block
    echo "Number less than 10";
}

// all the if and else if conditions have to be true. if none of them are true then the else block will be executed


?>