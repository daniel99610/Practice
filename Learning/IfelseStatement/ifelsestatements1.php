<?php

//Example 1
//Syntax of if and else condition
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