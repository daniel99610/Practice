<?php

//Example 1
// if is true
// else is false


// whenever the condition is true this if block is executed
// whenever the condition is false the else block is executed
$some_boolean_condition = FALSE;
if( $some_boolean_condition ) { // if it is true this block is executed
    echo 'This is a if block condition';
    echo 'This is a True condition';
} else { // if it is false this block is executed
    echo 'This is a ELSE block condition';
    echo 'This is a False condition';
}


// here we will check 2 conditions

$one_more_boolean_condition = FALSE;
if ($some_boolean_condition && $one_more_boolean_condition){
    echo 'This is a if block condition';
    echo 'This is a True condition';
} else {
    echo 'This is a ELSE block condition';
    echo 'This is a False condition';
}

/*
If both of these are false then it will print the else block because it is false
If both of these are true then it will print the if block because it is true
If one condition is True and the other is false then it will print the else block because it is false


*/


// html code can also be managed with if conditions


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!--

whatever it is inside this will be under the if condition

-->
<?php if ( $some_boolean_condition || true ){ ?>
    <h1>This is a true condition</h1>

<?php } else {?>
<!--whatever it is inside this will be under the else condition-->
    <h1>This is a true condition</h1>
<?php } ?>

<!--

Essentially with the if else statments we can control html elements
You can hide some part of the code using the if else statements. 
For example if you want to hide some output when a user is logged in 
you might want to show some part of the html. when the user is logged out you might want to show another part of html

-->
    
</body>
</html>

<?php
// example 2
// check if the inputs given by user is correct
$input1 = "Some text from the user"; // this is where the user would type on the web page. if this input field is filled out with text then it will echo out $input1 is not empty



$input1 = null; // because this is set to null, if the user does not fill out this input field then it will echo out $input1 is empty

$input2 = 34;

//condition 1
if( !is_null($input1) ) {
    echo '$input1 is not empty';
} else {
    echo '$input1 is empty';
}

//condition 2 
// check if the variable is set or not using the && operator to combine the 2 conditions 
if( isset($input1) && !is_null($input1) ) {
    echo '$input1 is not empty';
} else {
    echo '$input1 is empty';
}


//condition 3 
if($input != ""){ // this is checking not equal to null
    echo '$input is not empty';
} else {
    echo '$input1 is empty';
}



//Best way to check if the field is empty
if( !empty($input1)){
    echo '$input1 is not empty';
} else {
    echo '$input1 is empty';
}

if( $input2 >= 34 ) {
    echo '$input2 is greater than or equal to 34';
} else {
    echo '$input1 is less than 34';
}

?>

<?php

// example 3
// if condition is statement without braces

$some_boolean_condition = TRUE;
if( $some_boolean_condition ) 

    echo 'This is a True condition';

else 
    echo 'This is a False condition';

// this top one will work on its own



// if you try to print this one then it will error out because theres no flower brackets. if you have 1 line then you do not need flower brackets
/*
if( $some_boolean_condition ) 

    echo 'This is a True condition';
    echo 'This is a False condition';
else 
    echo 'This is a False condition';
    echo 'This is a True condition';
*/


// one liner 

if( $some_boolean_condition ) echo 'This is a True condition'; else echo 'This is a False condition';

?>


<?php

// example 4
// check if the student has passed or failed
$result = "Passed";
if( $result === "Passed"){
    echo "Student has Passed the exam";
} else {
    echo "Student has NOT Passed";
}

?>

